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
                    'title' => $article->seo_title ? $article->seo_title : $article->title,
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
                    'title' => $article->seo_title ? $article->seo_title : $article->title,
                    'description' => $article->meta_description,
                    'keywords' => $article->meta_keywords,


                ]);
                
            }
        }

        return $this->articles();

    }

    public function articles($name = false)
    {
        $description = "View latest articles that talk about a wide range of topics";
        if($name)
        {
            $user = User::where('slug', $name)->first();
            if($user)
            {
                $data = Post::where('author_id', $user->id)
                                ->where('type','article')
                                ->where('status', 'PUBLISHED')
                                ->orderBy('created_at', 'desc')
                                ->get();
                $keywords = '';
                foreach ($data as $event) 
                {
                    $keywords .= $event->meta_keywords.',';
                }
                return view('articles',[ 
                    'articles' => $data,
                    'user' => $user,
                    'keywords' => $keywords,
                    'description' => $description

                ]);
                
            }
        }
        $data = Post::where('type','article')->orderBy('created_at', 'desc')->where('status', 'PUBLISHED')->get();
        $keywords = '';
        foreach ($data as $event) 
        {
            $keywords .= $event->meta_keywords.',';
        }
        return view('articles',[ 
            'articles' => $data,
            'user' => false,
            'title' => 'All Articles',
            'keywords' => $keywords,
            'description' => $description

        ]);

    }



    public function videos($name = false)
    {
        $description = "Videos to showcase new technology and raise awarness";
        if($name)
        {
            $user = User::where('slug', $name)->first();
            if($user){
                $data = Post::where('author_id', $user->id)->where('type','video')->where('status', 'PUBLISHED')->get();
                $keywords = '';
                foreach ($data as $event) 
                {
                    $keywords .= $event->meta_keywords.',';
                }
                return view('videos',[ 
                    'videos' => $data,
                    'user' => $user,
                    'title' => 'Videos',
                    'keywords' => $keywords,
                    'description' => $description

                ]);
            }
        }

        $data = Post::where('type','video')->where('status', 'PUBLISHED')->get();
        $keywords = '';
        foreach ($data as $event) 
        {
            $keywords .= $event->meta_keywords.',';
        }
        return view('videos',[ 
            'videos' => $data,
            'user' => false,
            'title' => 'Videos',
            'keywords' => $keywords,
            'description' => $description

        ]);

    }



    public function beforeAfter($name = false)
    {
        $description = "View images of the amazing results!";
        if($name)
        {
            $user = User::where('slug', $name)->first();
            if($user){
                $data = Post::where('author_id', $user->id)->where('type','ba')->orderBy('created_at', 'desc')->where('status', 'PUBLISHED')->get();
                $keywords = '';
                foreach ($data as $event) 
                {
                    $keywords .= $event->meta_keywords.',';
                }
                return view('beforeAfter',[ 
                    'beforeAfters' => $data,
                    'user' => $user,
                    'title' => 'Before & After',
                    'keywords' => $keywords,
                    'description' => $description

                ]);
            }
        }

        $data = Post::where('type','ba')->orderBy('created_at', 'desc')->where('status', 'PUBLISHED')->get();
        $keywords = '';
        foreach ($data as $event) 
        {
            $keywords .= $event->meta_keywords.',';
        }

        return view('beforeAfter',[ 
            'beforeAfters' => $data,
            'user' => false,
            'title' => 'Before & After',
            'keywords' => $keywords,
            'description' => $description

        ]);

    }


    public function events($name = false)
    {
        $description = "View upcoming and past events from MedSpaOne";
        if($name)
        {
            $user = User::where('slug', $name)->first();
            if($user)
            {
                $data = Post::where('author_id', $user->id)->where('type','event')->orderBy('created_at', 'desc')->where('status', 'PUBLISHED')->get();
                $keywords = '';
                foreach ($data as $event) 
                {
                    $keywords .= $event->meta_keywords.',';
                }
                return view('events',[ 
                    'events' => $data,
                    'user' => $user,
                    'title' => 'Events',
                    'keywords' => $keywords,
                    'description' => $description

                ]);

            }
        }

        $data = Post::where('type','event')->orderBy('created_at', 'desc')->where('status', 'PUBLISHED')->get();
        $keywords = '';
        foreach ($data as $event) 
        {
            $keywords .= $event->meta_keywords.',';
        }

        return view('events',[ 
            'events' => $data,
            'user' => false,
            'title' => 'Events',
            'keywords' => $keywords,
            'description' => $description

        ]);

    }


}