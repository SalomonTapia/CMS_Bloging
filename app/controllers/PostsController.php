<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		$this->layout->content = View::make('posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /posts/create
	 *
	 * @return Response
	 */
	public function create(Post $post)
	{
		$this->layout->content = View::make('posts.create', compact('posts'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  Post  $post
	 * @return Response
	 */
	public function show(Post $post)
	{
		//$posts = Post::all();
		$this->layout->content = View::make('posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /posts/{id}/edit
	 *
	 * @param  Post  $post
	 * @return Response
	 */
	public function edit(Post $post)
	{
		$this->layout->content = View::make('posts.edit', compact('posts'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /posts/{id}
	 *
	 * @param  Post  $post
	 * @return Response
	 */
	public function update(Post $post)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /posts/{id}
	 *
	 * @param  Post $post
	 * @return Response
	 */
	public function destroy(Post $post)
	{
		//
	}

}