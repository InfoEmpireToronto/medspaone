<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Location;
use App\Post;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function articles($limit = false)
    {
        $ret = Post::where('author_id', $this->id)->where('type', 'article');
        if($limit)
            $ret->limit($limit);

        if($ret->exists())
            return $ret->get();
        else
            return false;
    }

    public function videos($limit = false)
    {
        $ret = Post::where('author_id', $this->id)->where('type', 'video');
        if($limit)
            $ret->limit($limit);

        if($ret->exists())
            return $ret->get();
        else
            return false;
    }

    public function beforeAfters($limit = false)
    {
        $ret = Post::where('author_id', $this->id)->where('type', 'ba');
        if($limit)
            $ret->limit($limit);

        if($ret->exists())
            return $ret->get();
        else
            return false;
    }

    public function locations()
    {
        return Location::where('user_id', $this->id)->get();

    }
}
