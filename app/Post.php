<?php

namespace App;

use App\User;

class Post extends \TCG\Voyager\Models\Post
{

	public function user()
	{
		return User::find($this->author_id);
	}
}