<?php

namespace App\Http\Controllers;


use App\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    
    public function price(){
        $prices = new Price();
        return view('pages.price', ['prices' => $prices->all()]);
        
    }
    

}
