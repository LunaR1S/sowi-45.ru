<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function review(){
        $reviews = new Contact();
        return view('pages.review', ['reviews' => $reviews->all()]);
    }

    public function review_check(Request $request){
       $valid = $request->validate([
           'name' => 'required|min:4|max:25',
           'subject' => 'required|min:4|max:25',
           'message' => 'required|min:4|max:500',
       ]);

       $review = new Contact();
       $review->name = $request -> input('name');
       $review->subject = $request -> input('subject');
       $review->message = $request -> input('message');

       $review->save();

       return redirect()->route('review');
    }

    
}
