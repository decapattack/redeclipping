<?php

class Perfil extends \Eloquent {
	protected $primaryKey = 'id_perfil';
    protected $table = 'perfis';
    public $timestamps = false;

    public function clientes(){
        return $this->hasMany("App\Cliente");
    }
}