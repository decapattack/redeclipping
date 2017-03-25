@extends('layouts.master')
@section('content')
<div class="conteudo-padrao-paginas">
    <div >
        {{ Form::open(['route' => 'clientes.store']) }}
        <div id="barra-ferramentas">
            <div class="btn-group" role="group" aria-label="">
                <a href="{{ action('ClientesController@index') }}" role="button" id="barra-ferramentas-voltar" class="btn btn-default"><span class="icon-arrow-left"></span> Voltar</a>
                <a href="{{ action('ClientesController@create') }}" role="button" id="barra-ferramentas-inserir" class="btn btn-default"><span class="icon-plus"></span> Incluir</a>
                <a href="#" role="button" id="barra-ferramentas-editar" class="btn btn-default"><span class="icon-pencil"></span> Editar</a>
                <a href="{{ action('ClientesController@create') }}" role="button" id="barra-ferramentas-excluir" class="btn btn-default"><span class="icon-trash"></span> Excluir</a>
                <button type="submit" href="{{ action('ClientesController@create') }}" role="button" id="barra-ferramentas-salvar" class="btn btn-default"><span class="icon-glass"></span> Salvar</button>
                <a href="{{ action('ClientesController@index') }}" role="button" id="barra-ferramentas-pesquisar" class="btn btn-default"><span class="icon-search"></span> Pesquisar</a>
            </div>
            @include('layouts.barra_ferramentas')
            @include('layouts.barra_ferramentas_create')
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">Adicionar</h4>
        </div>
        <div class="panel-body">

            <div class='row'>
                <div class='span3'>
                    {{ Form::label('empresa', 'Nome da Empresa') }}
                    {{ Form::text('empresa', null) }}
                </div>
                <div class='span3'>
                    {{ Form::label('nome', 'Nome', ['class' => 'control-label']) }}
                    {{ Form::text('nome', null, ['class' => 'form-control']) }}
                </div>
                <div class='span3'>
                    {{ Form::label('cpf', 'CPF', ['class' => 'control-label']) }}
                    {{ Form::text('cpf', null, ['class' => 'form-control']) }}
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('cnpj', 'CNPJ', ['class' => 'control-label']) }}
                        {{ Form::text('cnpj', null, ['class' => 'form-control']) }}
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('insc_estadual', 'Inscrição Estadual', ['class' => 'control-label']) }}
                        {{ Form::text('insc_estadual', null, ['class' => 'form-control']) }}

                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('login', 'Login', ['class' => 'control-label']) }}
                        {{ Form::text('login', null, ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('senha', 'Senha', ['class' => 'control-label']) }}
                        {{ Form::text('senha', null, ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('password_confirmation', 'Confirmar Senha', ['class' => 'control-label']) }}
                        {{ Form::text('password_confirmation', null, ['class' => 'form-control']) }}
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('email', 'Email', ['class' => 'control-label']) }}
                        {{ Form::text('email', null, ['class' => 'form-control']) }}

                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('tel_geral', 'Telefone Geral', ['class' => 'control-label']) }}
                        {{ Form::text('tel_geral', null, ['class' => 'form-control']) }}

                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('contato', 'Contato', ['class' => 'control-label']) }}
                        {{ Form::text('contato', null, ['class' => 'form-control']) }}

                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('tel_contato', 'Telefone de Contato', ['class' => 'control-label']) }}
                        {{ Form::text('tel_contato', null, ['class' => 'form-control']) }}

                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('endereco', 'Endereço', ['class' => 'control-label']) }}
                        {{ Form::text('endereco', null, ['class' => 'form-control']) }}

                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('complemento', 'Complemento', ['class' => 'control-label']) }}
                        {{ Form::text('complemento', null, ['class' => 'form-control']) }}

                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('bairro', 'Bairro', ['class' => 'control-label']) }}
                        {{ Form::text('bairro', null, ['class' => 'form-control']) }}

                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>

                        {{ Form::label('cidade', 'Cidade', ['class' => 'control-label']) }}
                        {{ Form::select('cidade', $cidade, null, ['class' => 'form-control']) }}
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('estado', 'Estado', ['class' => 'control-label']) }}
                        {{ Form::select('estado', $uf, null, ['class' => 'form-control']) }}

                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('cep', 'CEP', ['class' => 'control-label']) }}
                        {{ Form::text('cep', null, ['class' => 'form-control']) }}

                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('mensuracao', 'Mensuração', ['class' => 'control-label']) }}
                        {{ Form::select('mensuracao', ['1' => 'Sim','2' => 'Não'], null, ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('perfil', 'Perfil', ['class' => 'control-label']) }}
                        {{ Form::select('perfil', $perfil, null, ['class' => 'form-control']) }}
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('logo', 'Logo', ['class' => 'control-label']) }}
                        <input type="file" name="logo" id="logo" class="form-control">
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('visibilidade', 'Visibilidade', ['class' => 'control-label']) }}
                        {{ Form::select('visibilidade', ['1' => 'Sim','0' => 'Não'], null, ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('traducao', 'Tradução', ['class' => 'control-label']) }}
                        {{ Form::select('traducao', ['0' => 'Não','1' => 'Sim'], null, ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        {{ Form::label('status', 'Status', ['class' => 'control-label']) }}
                        {{ Form::select('status', ['false' => 'Inativo','true' => 'Ativo'], null, ['class'=>'form-control']) }}
                    </div>
                </div>
            </div>
            {{ Form::hidden('cnpj_cpf', null, ['class' => 'form-control']) }}
            {{ Form::close() }}
            @if($errors->has())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</div>
<script src="/js/clientes/create.js"></script>
@stop
