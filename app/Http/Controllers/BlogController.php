<?php namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests;
use App\Http\Requests\CreateBlogRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Auth;

class BlogController extends Controller {

 public function __construct()
    {
 
        $this->middleware('auth', ['only' => ['create','edit']]);
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		
		$posts = Blog::latest('published_at')->published()->get();

		return view('blog.blog',compact('posts'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('blog.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateBlogRequest $request)
	{
		//

	//$inputs = Request::all();
	// $blog = new Blog($request -> all());
	// Auth::user()->posts()->save($blog);
	
	Blog::create($request -> all());
	return redirect('blog');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$post = Blog::findOrFail($id);
		
		return view('blog.single',compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//

		$post=Blog::findOrFail($id);
	$cur_user=Auth::id();
	$author=$post->user_id;
	if($cur_user==$author){
		return view('blog.edit',compact('post'));
	}
	else{
		return 'You Dont Have previledge to Edit This Post';
	}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,CreateBlogRequest $request)
	{
		//
		$post=Blog::findOrFail($id);
		$post->update($request->all());
		return redirect('blog');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
