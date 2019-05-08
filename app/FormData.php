<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class FormData extends Model
{
	protected $fillable = ['name', 'email', 'data', 'phone'];
	protected $table = 'formData';

    
}
