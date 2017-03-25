@extends('layouts.master')
<?php echo View::make('clientes.sidebar'); ?>
@section('content')
<div class="conteudo-padrao-paginas">
    <div id="barra-ferramentas">
        <div class="btn-group" role="group" aria-label="">
            <a href="{{ action('ClientesController@index') }}" role="button" id="barra-ferramentas-voltar" class="btn btn-default"><span class="icon-arrow-left"></span> Voltar</a>
            <a href="{{ action('ClientesController@create') }}" role="button" id="barra-ferramentas-inserir" class="btn btn-default"><span class="icon-plus"></span> Incluir</a>
            <a href="#" role="button" id="barra-ferramentas-editar" class="btn btn-default"><span class="icon-pencil"></span> Editar</a>
            <a href="{{ action('ClientesController@create') }}" role="button" id="barra-ferramentas-excluir" class="btn btn-default"><span class="icon-trash"></span> Excluir</a>
            <a href="{{ action('ClientesController@create') }}" role="button" id="barra-ferramentas-salvar" class="btn btn-default"><span class="icon-glass"></span> Salvar</a>
            <a href="{{ action('ClientesController@index') }}" role="button" id="barra-ferramentas-pesquisar" class="btn btn-default"><span class="icon-search"></span> Pesquisar</a>
        </div>
        @include('layouts.barra_ferramentas')
        @include('layouts.barra_ferramentas_index')
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" style="height:30px">
            <div class="index-lista-titulo" style="float:left">
                <h4 class="panel-title">Lista de clientes</h4>
            </div>
            <div class="index-lista-busca" style="float:right">
                <form method="post" action="{{ action('ClientesController@buscaClientes') }}">
                    <div class="input-append">
                        <input class="span2" id="busca-cliente" name="busca-cliente" type="text" style="width:200px">
                        <button class="btn" type="submit"><span class="icon-search"></span> </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="panel-body">
             <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Empresa</th>
                        <th>Contato</th>
                        <th>Email</th>
                        <th>Tel. Contato</th>
                        <th>Informações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <th scope="row">{{ $cliente->id_cliente }}</th>
                            <td>{{ $cliente->empresa }}</td>
                            <td>{{ $cliente->contato }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->tel_contato }}</td>
                            <td><a class="btn btn-default btn-sm" href="clientes/{{$cliente->id_cliente}}">
                                <span class="icon-info-sign"></span>
                            </a></td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $clientes->links() }}
        </div>
    </div>
</div>

@stop
