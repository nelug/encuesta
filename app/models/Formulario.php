<?php

class Formulario extends \BaseModel {
    protected $table = 'formulario';
	protected $guarded = array('id');

    public function user()
    {
        return $this->belongsTo('User');
    }
}
