<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TContact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('site.home');
    }
     public function services(){
        return view('site.services');
    }
     public function contact(){
        return view('site.contact_us');
    }
    public function send(Request $request) {
       $contact = new TContact();
       $contact->s_name = $request->s_name;
       $contact->s_mobile = $request->s_mobile;
       $contact->s_email = $request->s_email;
       $contact->s_content = $request->s_content;
       $contact->save();
      return redirect()->back();
    }
}
