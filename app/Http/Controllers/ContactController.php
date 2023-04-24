<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contact(){
        return view('components.contact');
    }

    public function contactus(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|max:500',
            'message'=> 'required|max:5048',
          
           ]);
    
                Contact::create([
                'name'=> $request->input('name'),
                'email'=> $request->input('email'),
                'message'=> $request->input('message'),
               
            ]);
            
            return redirect('/')->with('message', 'Your Message Has Been Sent Successfully!');
        
    }
    public function messages(){
       $messages =  Contact::all();
       return view('components.messages', ['contacts'=> $messages]);
    }
}

