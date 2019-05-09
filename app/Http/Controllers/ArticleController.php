<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
// use TCG\Voyager\Models\Post;

use Carbon\Carbon;
use Jenssegers\Agent\Agent;


class ArticleController extends Voyager\VoyagerController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
        
    // }

    public function viewArticle($id)
    {

        return view('article',[ 
            'article' => Post::find($id)

        ]);

    }

    public function articles($name = false)
    {
        if($name)
        {
            $user = User::where('slug', $name)->first();
            if($user)
            {
                $articles = Post::where('author_id', $user->id)
                                ->where('type','article')
                                ->orderBy('created_at', 'desc')
                                ->get();
                return view('articles',[ 
                    'articles' => $articles,
                    'user' => $user

                ]);
                
            }
        }

        return view('articles',[ 
            'articles' => Post::where('type','article')->orderBy('created_at', 'desc')->get(),
            'user' => false

        ]);

    }



    public function videos($name = false)
    {
        if($name)
        {
            $user = User::where('slug', $name)->first();
            if($user)
                return view('videos',[ 
                    'videos' => Post::where('author_id', $user->id)->where('type','video')->get(),
                    'user' => $user

                ]);
        }

        return view('videos',[ 
            'videos' => Post::where('type','video')->get(),
            'user' => false

        ]);

    }



    public function beforeAfter($name = false)
    {

        if($name)
        {
            $user = User::where('slug', $name)->first();
            if($user)
                return view('beforeAfter',[ 
                    'beforeAfters' => Post::where('author_id', $user->id)->where('type','ba')->orderBy('created_at', 'desc')->get(),
                    'user' => $user

                ]);
        }

        return view('beforeAfter',[ 
            'beforeAfters' => Post::where('type','ba')->orderBy('created_at', 'desc')->get(),
            'user' => false

        ]);

    }


}