<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Article;
use App\Post;
use App\Location;
use App\User;

use Carbon\Carbon;
use Jenssegers\Agent\Agent;


class HomeController extends Controller
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
    public function index()
    {
        $articles = Post::all();//Article::where('id', '>', 1)->where('status', 1)->get();

        return view('welcome',[ 
            'articles' => $articles

        ]);
    }

    public function viewArticle()
    {

        return view('article',[ 
            

        ]);

    }

    public function findPhysician()
    {
        $locations = Location::all();

        return view('findPhysician',[ 
            'locations' => $locations

        ]);

    }

    public function startChat()
    {
        // dd($data);
        return view('chat',[ 


        ]);


    }


    public function beforeAfter($name = false)
    {

        if($name)
        {
            $user = User::where('slug', $name)->first();
            if($user)
                return view('beforeAfter',[ 
                    //'articles' => Post::where('author_id', $user->id)->get(),
                    'user' => $user

                ]);
        }

        return view('beforeAfter',[ 
            'user' => false

        ]);

    }

    public function faq()
    {

        return view('faq',[ 
            

        ]);

    }

    public function profile($slug = false)
    {
        if(!$slug) return view('profile-tmpl');

        return view('profile',[ 
            'user'=>User::where('slug', $slug)->first()

        ]);

    }

    public function membership()
    {

        return view('membership',[ 
            

        ]);

    }


    public function giftReward()
    {

        return view('giftReward',[ 
            

        ]);

    }




    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/admin');
        }

        return view('login',[ 
            

        ]);

    }


    public function about()
    {

        return view('about',[ 
            

        ]);

    }



}