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
                        <th>Fav</th>
                        <th>Título</th>
                        <th>Data Veic.</th>
                        <th>Data Public.</th>
                        <th>Peso</th>
                        <th>Disp.</th>
                        <th>Cliente</th>
                        <th>Usuário</th>
                        <th>Idioma</th>
                        <th>Ações</th>
                        <th>Selec.</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clippings as $clipping)
                        <tr>
                            <th scope="row">{{ $clipping->id_clipping }}</th>
                            <td>=></td>
                            <td>{{ $clipping->titulo }}</td>
                            <td>{{ $clipping->data_v }}</td>
                            <td>{{ $clipping->data_p }}</td>
                            <td>{{ $clipping->peso_assunto }}</td>
                            <td>{{ $clipping->disponibilidade }}</td>
                            <td><?php
                                    echo DB::table('clientes')->where('id_cliente',$clipping->id_cliente)->first()->empresa;
                                ?>
                            </td>
                            <td><?php
                                    echo DB::table('usuarios')->where('id_usuario',$clipping->usuario)->first()->nome;
                                ?>
                            </td>
                            <td>??</td>
                            <td><a class="btn btn-default btn-sm" href="clippings/{{$clipping->id_clipping}}">
                                <span class="icon-info-sign"></span>
                            </a></td>
                            <td>V</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $clippings->links() }}
        </div>
    </div>
</div>
@stop
