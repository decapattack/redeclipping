<?php

class Cidade extends \Eloquent {
	protected $table = 'cidade';
    public function estado(){
        return $this->belongsTo('App\Estado');
    }
}