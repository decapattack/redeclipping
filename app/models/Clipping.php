<?php

class Clipping extends \Eloquent {
    protected $primaryKey = 'id_clipping';
    protected $table = 'clipping';
    protected $fillable = ['id_clipping',
        'id_cliente',
        'titulo',
        'titulo_es',
        'titulo_en',
        'data_v',
        'data_p',
        'id_assunto',
        'peso_assunto',
        'id_posicao',
        'peso_posicao',
        'id_capacliente',
        'altura',
        'coluna',
        'id_veiculo',
        'id_caderno',
        'id_secao',
        'pagina',
        'chaves',
        'favorabilidade',
        'peso',
        'book',
        'disponibilidade',
        'corpotexto',
        'n_pagina',
        'valor',
        'data_insercao',
        'usuario',
        'usuario_rev',
        'resumo',
        'resumo_es',
        'resumo_en',
        'id_tipo_materia',
        'id_classificacao_veiculo',
        'espanhol_trad',
        'ingles_trad'
    ];
    public $timestamps = false;

    public function cliente(){
        return $this->belongsTo("Cliente", 'id_cliente');
    }

    public function usuario(){
        return $this->belongsTo("User", 'usuario');
    }
}
