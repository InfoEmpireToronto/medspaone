<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Article;
use App\Post;
use App\Location;
use App\Faq;
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
        $articles = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->limit(10)->get();
        //Article::where('id', '>', 1)->where('status', 1)->get();

        $faqs = Faq::select('*')
        ->inRandomOrder()
        ->limit(5) // here is yours limit
        ->get();

        return view('welcome',[ 
            'articles' => $articles,
            'faqs' => $faqs

        ]);
    }

    public function viewArticle()
    {

        return view('article',[ 
            

        ]);

    }

    public function findPhysician()
    {
        $locations = Location::where('id', '>', 0)->orderBy('featured', 'desc')->get();

        return view('findPhysician',[ 
            'locations' => $locations

        ]);

    }

    public function physChat()
    {
        // dd($data);
        return view('physchat',[ 


        ]);


    }

    public function startChat()
    {
        // dd($data);
        return view('chat',[ 


        ]);


    }

    public function faq()
    {
        $faqs = Faq::where('id', '>', 0)
                ->where('category', '!=', '')
                ->orderBy('category', 'asc')
                ->orderBy('date_display', 'desc')
                ->get();
        // dump($faqs);

        return view('faq',[ 
            'faqs' => $faqs

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

    public function saveMembership(Request $request)
    {

        $vars = $request->all();

        foreach ($vars as $key => $value) {
            if(substr($key, 0, 4) == 'ERR_')
                unset($vars[$key]);
        }

        \Mail::to('tganyuk86@gmail.com')->send(new \App\Mail\newMembership($vars));
        // echo '<pre>';print_r($vars);

        return view('membershipThanks',[ 
            

        ]);

    }



}