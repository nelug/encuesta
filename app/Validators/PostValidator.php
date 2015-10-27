<?php namespace App\Validators;

use ValidatorAssistant, Input;

class PostValidator extends ValidatorAssistant
{
    protected $rules = array(
        'descripcion' =>  'required|min:5|max:250',
        'user_id'   =>  'required|min:1',
    );
}
