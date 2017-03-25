@extends('layouts.master')
@section('title', 'W3Programmers Home Page')
@section('content')
<div class="conteudo-padrao-paginas">
    <div >
        <div id="barra-ferramentas">
            <div class="btn-group" role="group" aria-label="">
            <a href="{{ action('ClientesController@index') }}" role="button" id="barra-ferramentas-voltar" class="btn btn-default"><span class="icon-arrow-left"></span> Voltar</a>
                <a href="{{ action('ClientesController@create') }}" role="button" id="barra-ferramentas-inserir" class="btn btn-default"><span class="icon-plus"></span> Incluir</a>
                <a href="{{ url('/clientes/'.$cliente->id_cliente.'/edit') }}" role="button" id="barra-ferramentas-editar" class="btn btn-default"><span class="icon-pencil"></span> Editar</a>
                <a href="{{ action('ClientesController@create') }}" role="button" id="barra-ferramentas-excluir" class="btn btn-default"><span class="icon-trash"></span> Excluir</a>
                <button type="submit" href="{{ action('ClientesController@create') }}" role="button" id="barra-ferramentas-salvar" class="btn btn-default"><span class="icon-glass"></span> Salvar</button>
                <a href="{{ action('ClientesController@index') }}" role="button" id="barra-ferramentas-pesquisar" class="btn btn-default"><span class="icon-search"></span> Pesquisar</a>
        </div>
        @include('layouts.barra_ferramentas')
        @include('layouts.barra_ferramentas_show')
       </div>
    </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">Informações: <b>{{ $cliente->empresa }}</b></h4>
            </div>
            <div class="panel-body">
                <div class='row'>
                    <div class='span3'>
                        <div class='form-group'>
                            <label for="user_title">Nome da Empresa</label>
                            <input class="form-control" id="user_title" name="user[title]"  type="text" value="{{ $cliente->empresa }}" disabled>
                        </div>
                    </div>
                    <div class='span3'>
                        <div class='form-group'>
                            <label for="user_firstname">Nome</label>
                            <input class="form-control" id="user_firstname" name="user[firstname]" required="true"  type="text"  value="{{ $cliente->nome }}" disabled>
                        </div>
                    </div>
                    <div class='span3'>
                        <div class='form-group'>
                            <label for="user_lastname">CPF</label>
                            <input class="form-control" id="cpf" name="cpf" required="true"  type="text"  value="{{ $cliente->cnpj_cpf }}" disabled>
                        </div>
                    </div>
                <div class='span3'>
                    <label for="user_lastname">CNPJ</label>
                        <input class="form-control" id="cnpj" name="cnpj" required="true"  type="text"  value="{{ $cliente->cnpj_cpf }}" disabled>
                </div>
            </div>
            <div class='row'>
                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_title">Inscrição Estadual</label>
                        <input class="form-control" id="user_title" name="user[title]"  type="text"  value="{{ $cliente->insc_estadual }}" disabled>
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_firstname">Login</label>
                        <input class="form-control" id="user_firstname" name="user[firstname]" required="true"  type="text"  value="{{ $cliente->login }}" disabled>
                    </div>
                </div>
                <div class='span3'>

                </div>
                <div class='span3'>

                </div>
            </div>
            <div class='row'>



                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_lastname">Email</label>
                        <input class="form-control" id="user_lastname" name="user[lastname]" required="true"  type="text"  value="{{ $cliente->email }}" disabled>
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_lastname">Telefone Geral</label>
                        <input class="form-control" id="user_lastname" name="user[lastname]" required="true"  type="text"  value="{{ $cliente->tel_geral }}" disabled>
                    </div>
                </div>



                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_title">Contato</label>
                        <input class="form-control" id="user_title" name="user[title]"  type="text"  value="{{ $cliente->contato }}" disabled>
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_firstname">Telefone de Contato</label>
                        <input class="form-control" id="user_firstname" name="user[firstname]" required="true"  type="text"  value="{{ $cliente->tel_contato }}" disabled>
                    </div>
                </div>

            </div>
            <div class='row'>



                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_lastname">Endereço</label>
                        <input class="form-control" id="user_lastname" name="user[lastname]" required="true"  type="text"  value="{{ $cliente->endereco }}" disabled>
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_lastname">Complemento</label>
                        <input class="form-control" id="user_lastname" name="user[lastname]" required="true"  type="text"  value="{{ $cliente->complemento }}" disabled>
                    </div>
                </div>



                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_title">Bairro</label>
                        <input class="form-control" id="user_title" name="user[title]"  type="text"  value="{{ $cliente->bairro }}" disabled>
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_firstname">Estado</label>
                        <input class="form-control" id="user_firstname" name="user[firstname]" required="true"  type="text"  value="{{ $cliente->uf }}" disabled>
                    </div>
                </div>

            </div>
            <div class='row'>

                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_lastname">Cidade</label>
                        <input class="form-control" id="user_lastname" name="user[lastname]" required="true"  type="text"  value="{{ $cliente->cidade }}" disabled>
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_lastname">CEP</label>
                        <input class="form-control" id="user_lastname" name="user[lastname]" required="true"  type="text"  value="{{ $cliente->cep }}" disabled>
                    </div>
                </div>


                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_lastname">Mensuração</label>
                        <select id="mensuracao" name="mensuracao" value="{{ $cliente->mensuracao }}"  class="form-control" disabled>
                            <option value="0">Não</option>
                            <option value="1">Sim</option>
                        </select>
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_lastname">Perfil</label>
                        <select id="perfil" name="perfil" value="{{ $cliente->perfil }}"  class="form-control" disabled>
                            <option value="1">Perfil 1</option>
                            <option value="2">Perfil 2</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_lastname">Logo</label>
                        <input class="form-control" id="logo" name="logo" required="true"  type="text"  value="{{ $cliente->logo }}" disabled>
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_lastname">Visibilidade</label>
                        <select id="visibilidade" name="visibilidade" value="{{ $cliente->visibilidade }}"  class="form-control" disabled>
                            <option value="0">Não</option>
                            <option value="1">Sim</option>
                        </select>
                    </div>
                </div>

                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_lastname">Tradução</label>
                        <select id="traducao" name="traducao" value="{{ $cliente->traducao }}"  class="form-control"  disabled>
                            <option value="0">Não</option>
                            <option value="1">Sim</option>
                        </select>
                    </div>
                </div>
                <div class='span3'>
                    <div class='form-group'>
                        <label for="user_lastname">Status</label>
                        <select id="status" name="status" value="{{ $cliente->status }}"  class="form-control" disabled>
                            <option value="true">Inativo</option>
                            <option value="false">Ativo</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@stop



