<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Carbon\Carbon;
use Jenssegers\Agent\Agent;

use Spatie\Sitemap\SitemapGenerator;


class AdminController extends Voyager\VoyagerController
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
        // parent::index();
        return view('admin.locations',[ 


        ]);


    }

    public function edit($id)
    {
        echo $id;
        // return view('admin.locations',[ 


        // ]);


    }

    public function startChat()
    {
        // dd($data);
        return view('admin.chat',[ 


        ]);


    }

   
    public function genSitemap()
    {
        SitemapGenerator::create('https://medspa.one')->writeToFile('sitemap.xml');

    }


}