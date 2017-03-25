@extends('layouts.login')
@section('content')
{{ Form::open(['route' => 'sessions.store']) }}
<div class="container-campos-login">
    <div class="input-prepend">
        <span class="add-on"><i class="icon-user"></i></span>
        <input class="campo-login-login" id="login" name="login" type="text" placeholder="Usuário" required>
    </div>

    <div class="input-prepend">
        <span class="add-on"><i class="icon-asterisk"></i></span>
        <input class="campo-login-password" id="password" name="password" type="password" placeholder="Senha" required>

    </div>
    <div class="container-botao-login" align="center">
        <input type="submit" value="Entrar" class="btn btn-primary">
    </div>
</div>
<div class="mensagem-erro-login">
    @if($errors->has())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{ $error }}<br>
        @endforeach
    </ul>
    @endif
</div>

{{ Form::close() }}
@endsection
@stop

