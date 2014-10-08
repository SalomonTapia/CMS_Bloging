<?php

class LogsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /logs
	 *
	 * @return Response
	 */
	public function index()
	{
		$logs = Log::all();
		$this->layout->content = View::make('logs.index', compact('logs'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /logs/create
	 *
	 * @return Response
	 */
	public function create($id)
	{
		$this->layout->content = View::make('logs.create', compact('logs'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /logs
	 *
	 * @return Response
	 */
	public function store($id)
	{
		
	}

	/**
	 * Display the specified resource.
	 * GET /logs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->content = View::make('logs.show', compact('log'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /logs/{id}/edit
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
	 * PUT /logs/{id}
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
	 * DELETE /logs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}