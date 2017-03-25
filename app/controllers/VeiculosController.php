<?php

class VeiculosController extends \BaseController {

	/**
	 * Display a listing of veiculos
	 *
	 * @return Response
	 */
	public function index()
	{
		$veiculos = Veiculo::all();

		return View::make('veiculos.index', compact('veiculos'));
	}

	/**
	 * Show the form for creating a new veiculo
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('veiculos.create');
	}

	/**
	 * Store a newly created veiculo in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Veiculo::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Veiculo::create($data);

		return Redirect::route('veiculos.index');
	}

	/**
	 * Display the specified veiculo.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$veiculo = Veiculo::findOrFail($id);

		return View::make('veiculos.show', compact('veiculo'));
	}

	/**
	 * Show the form for editing the specified veiculo.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$veiculo = Veiculo::find($id);

		return View::make('veiculos.edit', compact('veiculo'));
	}

	/**
	 * Update the specified veiculo in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$veiculo = Veiculo::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Veiculo::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$veiculo->update($data);

		return Redirect::route('veiculos.index');
	}

	/**
	 * Remove the specified veiculo from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Veiculo::destroy($id);

		return Redirect::route('veiculos.index');
	}

}
