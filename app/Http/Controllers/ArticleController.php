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

    public function viewArticle($name)
    {
        if($name)
        {
            $article = Post::where('slug', $name)->first();
            if($article)
            {
                $pp = $article->user()->popularPosts(3);
                return view('article',[ 
                    'article' => $article,
                    'popularPosts' => $pp ? $pp : false,
                    'title' => $article->seo_title,
                    'description' => $article->meta_description,
                    'keywords' => $article->meta_keywords,


                ]);
                
            }
        }

        return $this->articles();

    }

    public function viewEvent($name)
    {
        if($name)
        {
            $article = Post::where('slug', $name)->first();
            if($article)
            {
                $pp = $article->user()->popularPosts(3);
                return view('event',[ 
                    'article' => $article,
                    'popularPosts' => $pp ? $pp : false,
                    'title' => $article->seo_title,
                    'description' => $article->meta_description,
                    'keywords' => $article->meta_keywords,


                ]);
                
            }
        }

        return $this->articles();

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
                                ->where('status', 'PUBLISHED')
                                ->orderBy('created_at', 'desc')
                                ->get();
                return view('articles',[ 
                    'articles' => $articles,
                    'user' => $user

                ]);
                
            }
        }

        return view('articles',[ 
            'articles' => Post::where('type','article')->orderBy('created_at', 'desc')->where('status', 'PUBLISHED')->get(),
            'user' => false,
            'title' => 'All Articles'

        ]);

    }



    public function videos($name = false)
    {
        if($name)
        {
            $user = User::where('slug', $name)->first();
            if($user)
                return view('videos',[ 
                    'videos' => Post::where('author_id', $user->id)->where('type','video')->where('status', 'PUBLISHED')->get(),
                    'user' => $user,
                    'title' => 'Videos'

                ]);
        }

        return view('videos',[ 
            'videos' => Post::where('type','video')->where('status', 'PUBLISHED')->get(),
            'user' => false,
            'title' => 'Videos'

        ]);

    }



    public function beforeAfter($name = false)
    {

        if($name)
        {
            $user = User::where('slug', $name)->first();
            if($user)
                return view('beforeAfter',[ 
                    'beforeAfters' => Post::where('author_id', $user->id)->where('type','ba')->orderBy('created_at', 'desc')->where('status', 'PUBLISHED')->get(),
                    'user' => $user,
                    'title' => 'Before & After'

                ]);
        }

        return view('beforeAfter',[ 
            'beforeAfters' => Post::where('type','ba')->orderBy('created_at', 'desc')->where('status', 'PUBLISHED')->get(),
            'user' => false,
            'title' => 'Before & After'

        ]);

    }


    public function events($name = false)
    {

        if($name)
        {
            $user = User::where('slug', $name)->first();
            if($user)
                return view('events',[ 
                    'events' => Post::where('author_id', $user->id)->where('type','event')->orderBy('created_at', 'desc')->where('status', 'PUBLISHED')->get(),
                    'user' => $user,
                    'title' => 'Events'

                ]);
        }

        return view('events',[ 
            'events' => Post::where('type','event')->orderBy('created_at', 'desc')->where('status', 'PUBLISHED')->get(),
            'user' => false,
            'title' => 'Events'

        ]);

    }


}