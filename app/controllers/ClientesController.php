<?php

class ClientesController extends \BaseController {


    /**
     * Display a listing of clientes
     *
     * @return Response
     */
    public function index() {
        $clientes = DB::table('clientes')->paginate(10);
        return View::make('clientes.index', compact('clientes'));
    }

    /**
     * Busca Clientes
     *
     * @return Redirect
     */
    public function buscaClientes() {
        $nome = Input::get('busca-cliente');
        $clientes = Cliente::where('contato', 'like', '%' . $nome . '%')->paginate(10);
        return View::make('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new cliente
     *
     * @return Response
     */
    public function create() {
        $uf = Uf::lists('nome', 'sigla');
        $cidade = Cidade::select('id', 'nome')->where('estado_id', 2)->orderBy('nome', 'ASC')->lists('nome', 'id');
        $perfil = Perfil::lists('perfil', 'id_perfil');
        return View::make('clientes.create', compact('uf', 'cidade', 'perfil'));
    }

    /**
     * Store a newly created cliente in storage.
     *
     * @return Response
     */
    public function store() {
        Cliente::create($request->all());
        $clientes = DB::table('clientes')->paginate(10);
        return Redirect::route('clientes.index');
    }

    /**
     * Display the specified cliente.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $cliente = Cliente::findOrFail($id);
        return View::make('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified cliente.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $cliente = Cliente::findOrFail($id);
        return View::make('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified cliente in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $cliente = Cliente::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Cliente::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $cliente->update($data);

        return Redirect::route('clientes.index');
    }

    /**
     * Remove the specified cliente from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Cliente::destroy($id);

        return Redirect::route('clientes.index');
    }

    public function buscaCidades(Request $request) {
        $estado = Estado::where('sigla', $request->codigoEstado)->get();
        $cidades = Estado::find($estado[0]->id)->cidades()->orderBy('nome', 'ASC')->get();
        $response = array(
            'status' => 'success',
            'cidades' => $cidades
        );
        return response()->json($response);
    }

}
