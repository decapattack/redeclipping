<?php

class ClippingsController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /clippings
     *
     * @return Response
     */
    public function index()
    {
        $clientes = Cliente::lists('sigla','id_cliente');
        $capas = CapasCliente::select('id_capacliente', 'nome')->where('visibilidade', 1)->orderBy('nome', 'ASC')->lists('nome', 'id_capacliente');
        $assuntos = Assunto::lists('nome', 'id_assunto');
        $clippings = DB::table('clipping')->paginate(20);
        return View::make('clippings.index', compact('clippings','clientes','capas','assuntos'));
    }

    /**
     * Show the form for creating a new resource.
     * GET /clippings/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /clippings
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /clippings/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /clippings/{id}/edit
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
     * PUT /clippings/{id}
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
     * DELETE /clippings/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
