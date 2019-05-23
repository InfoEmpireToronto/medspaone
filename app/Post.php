<?php

namespace App;

use App\User;
use App\PostCategory;
use TCG\Voyager\Models\Category;

class Post extends \TCG\Voyager\Models\Post
{
	private $_user = false;
	private $_categories = false;

	public function user()
	{
		if($this->_user && $this->_user->id == $this->author_id)
			return $this->_user;

		$this->_user = User::find($this->author_id);
		return $this->_user;
	}

	public function getCategories()
	{
		if($this->_categories)
			return $this->_categories;

		$cats = PostCategory::where('post_id', $this->id)->get();
		$ret = [];
		foreach($cats as $cat)
		{
			$ret[] = Category::find($cat->category_id);
		}
		if(count($ret) == 0)
		{
			$ret[] = Category::first();
		}
		$this->_categories = $ret;
		return $ret;

	}

}