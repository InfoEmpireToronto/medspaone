<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Location extends Model
{
    protected $table = 'location';

    public function user()
    {
    	return User::find($this->user_id);
    }
}
