<?php

class Estado extends \Eloquent {
	protected $table = 'estado';

    public function nacao(){
        return $this->belongsTo('App\Nacao');
    }

     public function cidades(){
        return $this->hasMany("App\Cidade");
    }
}