<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Carbon\Carbon;
use Jenssegers\Agent\Agent;



use App\FormData;
use App\Sms;
use App\Post;


class AjaxController extends Voyager\VoyagerController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function getHomepageItems(Request $request)
    {
        // dd($request);

        return view('parts.homepageItems',[ 
            'articles' => Post::where('status', 'PUBLISHED')
                            ->orderBy('created_at', 'desc')
                            ->limit(10)
                            ->offset($request['start'])
                            ->get()

        ]);
        

    }
    public function saveContact(Request $request)
    {

    


        // FormData::create([
        //     'name' => $request['name'],
        //     'phone' => $request['phone']
        // ]);


        Sms::sendSMS('14169907119', 'wow test');

        return response()->json(['status'=>'success']);





    }

   


}