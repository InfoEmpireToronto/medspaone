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

    


        FormData::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email']
        ]);

        \Mail::to('thomas@infoempire.com')->send(new \App\Mail\newContact('<pre>'.print_r($request->all(),1).'</pre>'));
        \Mail::to('ron@infoempire.com')->send(new \App\Mail\newContact('<pre>'.print_r($request->all(),1).'</pre>'));

        // dd($out);


        // Sms::sendSMS('14163226000', $request['name'].' has a question, to start the conversation go to https://medspa.one/phys/chat');

        return response()->json(['status'=>'success']);





    }

   
    public function saveContactExpert(Request $request)
    {

        $vars = $request->all();


        FormData::create([
            'name' => $request['name'],
            'phone' => $request['tel'],
            'email' => $request['email'],
            'data' => json_encode($request->all())
        ]);

        \Mail::to('thomas@infoempire.com')->send(new \App\Mail\newContact($vars));
        \Mail::to('ron@infoempire.com')->send(new \App\Mail\newContact($vars));

        
        // Sms::sendSMS('14163226000', $request['name'].' has a question, to start the conversation go to https://medspa.one/phys/chat');

        return response()->json(['status'=>'success']);





    }

   


}