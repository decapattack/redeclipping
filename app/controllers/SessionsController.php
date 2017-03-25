<?php

class SessionsController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /sessions
     *
     * @return Response
     */
    public function index() {
        return View::make('sessions.index');
    }

    /**
     * Show the form for creating a new resource.
     * GET /sessions/create
     *
     * @return Response
     */
    public function create() {
        $usuario = array(
            'login' => Input::get('login'),
            'password' => Input::get('password')
        );

        if (Auth::attempt($usuario)) {
            Auth::user();
            return 'OK';
        }
        return 'Failed!';
    }

    /**
     * Store a newly created resource in storage.
     * POST /sessions
     *
     * @return Response
     */
    public function store() {
        $validator = Validator::make(Input::all(), [
            'login' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $usuario = array(
            'login' => Input::get('login'),
            'password' => Input::get('password')
        );
        
        if (Auth::attempt($usuario)) {
            Auth::user();
            return Redirect::to('clientes');
        } else {
            $errors = ['Usuário inválido ou inexistente. Por favor, tente novamente.'];
            return Redirect::back()->withErrors($errors);
        }
    }

    /**
     * Display the specified resource.
     * GET /sessions/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /sessions/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /sessions/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /sessions/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Auth::logout();
        return Redirect::to('landing');
    }

}
