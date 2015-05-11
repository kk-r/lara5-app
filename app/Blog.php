<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Blog extends Model {

	//
	//protected $fillable = ['name', 'email', 'password'];

	protected $fillable = [	'name',		'content',	'excerpt','user_id','created_by',	'published_at'	];


	public function scopePublished($query){
		
		$query->where('published_at','<=',Carbon::now());

	}
	public function user(){
		return $this->belongsTo('App\User');
	}
}
