<?php

class Nacao extends \Eloquent {
	protected $table = 'pais';

    public function estados(){
        return $this->hasMany("App\Estado");
    }
}