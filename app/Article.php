<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use TCG\Voyager\Models\Category;


class Article extends Model
{
	protected $fillable = ['site_id', 'category', 'title', 'content', 'type', 'status', 'user_id'];
    
    protected $connection = 'mysql-articles';
    protected $table = 'posts';

    const CREATED_AT = 'date_created';
	const UPDATED_AT = 'date_modified';


	public function user()
	{
		$user = User::find($this->author_id);
		return $user ? $user : User::find(1);
	}
	
}
