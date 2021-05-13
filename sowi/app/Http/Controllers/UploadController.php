<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Application;

class UploadController extends Controller
{
    public function upload(Request $request){
        $path =  $request->file('foto')->store('public');
        $path = str_ireplace('public', 'public/storage' , $path);

        $request->validate([

            'foto' => ['required'],
        ]);
        Application::create([

            'foto' => $path,
        ]);
        return redirect()->route('create');
    }
}
