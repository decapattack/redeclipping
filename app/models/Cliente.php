<?php

class Cliente extends \Eloquent {

	// Add your validation rules here
	public static $rules = ["empresa" => "required",
        "senha" => "min:6|required",
        "password_confirmation" => "min:6|same:senha",
        "email" => "required",
        "endereco" => "required",
        "complemento" => "required",
        "bairro" => "required",
        "cep" => "required",
        "cidade" => "required",
        "uf" => "required",
        "cnpj_cpf" => "required",
        "insc_estadual" => "required",
        "tel_geral" => "required",
        "contato" => "required",
        "tel_contato" => "required",
        "perfil" => "required",
        "mensuracao" => "required",
        "arquivo" => "required",
        "tipo" => "required",
        "status" => "required",
        "sigla" => "required",
        "visibilidade" => "required",
        "nome" => "required",
        "traducao" => "required",
        "login" => "required" ];
    /*

        "senha" => "min:6|required",
        "password_confirmation" => "min:6|same:senha"
        "email" => "required",
        "endereco" => "required",
        "complemento" => "required",
        "bairro" => "required",
        "cep" => "required",
        "cidade" => "required",
        "uf" => "required",
        "cnpj_cpf" => "required",
        "insc_estadual" => "required",
        "tel_geral" => "required",
        "contato" => "required",
        "tel_contato" => "required",
        "perfil" => "required",
        "mensuracao" => "required",
        "arquivo" => "required",
        "tipo" => "required",
        "status" => "required",
        "sigla" => "required",
        "visibilidade" => "required",

	];*/

	protected $fillable = array(
        "id_cliente" ,
        "empresa",
        "nome" ,
        "login",
        "senha",
        "email",
        "endereco",
        "complemento",
        "bairro" ,
        "cep" ,
        "cidade" ,
        "uf" ,
        "cnpj_cpf" ,
        "insc_estadual" ,
        "tel_geral",
        "contato",
        "tel_contato" ,
        "perfil" ,
        "mensuracao" ,
        "arquivo" ,
        "tipo" ,
        "status" ,
        "sigla" ,
        "visibilidade" ,
        "traducao"
    );

    protected $primaryKey = "id_cliente";
    protected $table = "clientes";
    public $timestamps = false;

    public function perfis(){
        return $this->belongsTo("Perfil");
    }

    public function clippings(){
        return $this->hasMany("Clipping");
    }

}
