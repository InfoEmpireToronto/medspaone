<?php

namespace App;

use App\User;
use App\PostCategory;
use TCG\Voyager\Models\Category;

class Post extends \TCG\Voyager\Models\Post
{

	public function user()
	{
		return User::find($this->author_id);
	}

	public function getCategories()
	{
		$cats = PostCategory::where('post_id', $this->id)->get();
		foreach($cats as $cat)
		{
			$ret[] = Category::find($cat->category_id);
		}
		return $ret;

	}
}