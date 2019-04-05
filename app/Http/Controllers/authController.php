<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class authController extends Controller
{public function index(){
        return view('contact-us-form');
    }
    //
    public function send(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);
        $data=array(
            'name'=>$request->name,
            'message'=>$request->message
        );
        
        Mail::to($request->email)->send(new SendMail($data));
        return back()->with('success','Email Successfully send');
    }
}
