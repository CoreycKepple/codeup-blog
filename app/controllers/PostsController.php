<?php

class PostsController extends BaseController {

	public function __construct()
	{
		 // call base controller constructor
		parent::__construct();

		// run auth filter before all methods on this controller except index and show
		$this->beforeFilter('auth', ['except' => ['index', 'show']]);
	}

	

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');
		
		if (is_null($search)) {
			
			$data = array('posts' => Post::with('user')
											->orderBy('created_at', 'desc')
											->paginate(4));
		
		}else{
		
			$data = array('posts' => Post::with('user')
											->where('title', 'LIKE', "%{$search}%")
											->orWhere('body', 'LIKE', "%{$search}%")
											->paginate(4));
		
		}
		return View::make('posts.index')->with($data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Log::info(Input::all());  
		// create the validator
  		$validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', 'Post could not be created, see form errors.');
	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {
		    $post = new Post();
		    $post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
	    	if(Input::hasFile('file')){

				$file = Input::file('file');
				$randompath = str_random(8);
				$destinationPath = public_path().'/upload/'.$randompath;
				$filename = $file->getClientOriginalName();
				Input::file('file')->move($destinationPath, $filename);
				$post->image_path = "/upload/".$randompath.'/'.$filename;	
				
		    }
		    // validation succeeded, create and save the post
		    
			$post->save();
			Session::flash('successMessage', 'Post created successfully.');
			return Redirect::action('PostsController@index');
			
	    }

		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findorFail($id);
		return View::make('posts.show')->with('post',$post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post',$post);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		// create the validator
  		$validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', 'Post could not be updated, see form errors.');
	        return Redirect::back()->withInput()->withErrors($validator);
	    }
	    else
	    {
	        // validation succeeded, create and save the post
	        $post = Post::findorFail($id);
	        $post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			if (Input::hasFile('file')) {
				$file = Input::file('file');
				$randompath = str_random(8);
				$destinationPath = public_path().'/upload/'.$randompath;
				$filename = $file->getClientOriginalName();
				Input::file('file')->move($destinationPath, $filename);
				$post->image_path = "/upload/".$randompath.'/'.$filename;	
			}else {
				$post->image_path = null;
			}
			$post->save();
			Session::flash('successMessage', 'Post updated successfully.');
			return Redirect::action('PostsController@index');
	    }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::findorFail($id)->delete();
		Session::flash('successMessage', 'Post deleted.');
		return Redirect::action('PostsController@index');

	}

}