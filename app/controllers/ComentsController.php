<?php

class ComentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /coments
	 *
	 * @return Response
	 */
	public function index()
	{
		$coments = Coment::all();
		$this->layout->content = View::make('coments.index', compact('coments'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /coments/create
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /coments
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /coments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->content = View::make('coments.show', compact('coment'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /coments/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /coments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /coments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}