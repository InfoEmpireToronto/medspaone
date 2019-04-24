<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Article;
use App\Location;

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
        $articles = Article::where('id', '>', 1)->where('status', 1)->get();

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


    public function beforeAfter()
    {

        return view('beforeAfter',[ 
            

        ]);

    }

    public function profile()
    {

        return view('profile',[ 
            

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


    public function videos()
    {

        return view('videos',[ 
            

        ]);

    }


    public function login()
    {

        return view('login',[ 
            

        ]);

    }


    public function about()
    {

        return view('about',[ 
            

        ]);

    }



}