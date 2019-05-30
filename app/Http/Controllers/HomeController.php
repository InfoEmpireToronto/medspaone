<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

use App\Article;
use App\Post;
use App\Location;
use App\Faq;
use App\User;
use App\FormData;

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
        ->whereIn('site_id', [20,73,21,84,2,71,19,82,83,14,79,86,85])
        ->where('status', 1)
        ->where('category', '!=', '')
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
        $geoLocation = geoip()->getLocation();

        $locations = Location::where('id', '>', 0)->where('featured', '0')->get();
        foreach ($locations as $location) 
        {
            $location->distance = $location->distance($geoLocation['lat'], $geoLocation['lon'], $location['lat'], $location['lon']);
        }

        $featuredLocations = Location::where('id', '>', 0)->where('featured', '1')->get();
        foreach ($featuredLocations as $location) 
        {
            $location->distance = $location->distance($geoLocation['lat'], $geoLocation['lon'], $location['lat'], $location['lon']);
        }

        $locations = $locations->sort(function ($a, $b) {
            if ($a == $b) {
                return 0;
            }
            return ($a->distance < $b->distance) ? -1 : 1;
        });

        return view('findPhysician',[ 
            'locations' => $locations,
            'featuredLocations' => $featuredLocations,
            'geoLocation' => $geoLocation,

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

    public function search(Request $request)
    {

        // dump($request);

        $keywords = $request['s'];
        $results = [];

        // $users = User::where('name', 'LIKE', "%{$keywords}%")
        //             ->orWhere('email', 'LIKE', "%{$keywords}%")
        //             ->orWhere('bio', 'LIKE', "%{$keywords}%")

        $results = Post::where('title', 'LIKE', "%{$keywords}%")
                    ->orWhere('body', 'LIKE', "%{$keywords}%")
                    ->get();



        return view('search',[ 
            'results' => $results

        ]);


    }

    public function faq()
    {
        $faqs = Faq::where('id', '>', 0)
                ->whereIn('site_id', [20,73,21,84,2,71,19,82,83,14,79,86,85])
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




    public function contactus(Request $request)
    {
        return view('contactus',[ 
            

        ]);
    }

    public function submitContactus(Request $request)
    {
        $vars = $request->all();
        FormData::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'data' => json_encode($vars)
        ]);

        \Mail::to('thomas@infoempire.com')->send(new \App\Mail\newContact($vars));
        \Mail::to('ron@infoempire.com')->send(new \App\Mail\newContact($vars));

        return view('contactusThanks',[ 
            

        ]);
    }


    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/admin');
        }

        return $this->index();

    }


    public function about()
    {


        return view('about',[ 
            'members' => Location::count(),
            'articles' => Post::count()

        ]);

    }
    public function askExpert()
    {


        return view('askExpert',[ 
            

        ]);

    }

    public function saveMembership(Request $request)
    {

        $vars = $request->all();

        foreach ($vars as $key => $value) {
            if(substr($key, 0, 4) == 'ERR_')
                unset($vars[$key]);
        }

        FormData::create([
            'name' => $request['FullName'],
            'phone' => $request['EmployPhone'],
            'email' => $request['Email'],
            'data' => json_encode($vars)
        ]);

        \Mail::to('thomas@infoempire.com')->send(new \App\Mail\newMembership($vars));
        \Mail::to('ron@infoempire.com')->send(new \App\Mail\newMembership($vars));

        // echo '<pre>';print_r($vars);

        return view('membershipThanks',[ 
            

        ]);

    }

    public function terms()
    {
        return view('terms');
    }
    public function privacy()
    {
        return view('privacy');
    }


    public function getImage($width, $file)
    {
        // $file = public_path($file);
        // dump($file);
        // dump($width);
        $img = Image::cache(function($image) use ($file, $width) {
           $image->make($file)->resize($width, 200)->greyscale();
        }, 10);

        $response = Response::make($img, 200);

        $response->header("Content-Type", 'jpeg');

      

        return $response;
    }


}