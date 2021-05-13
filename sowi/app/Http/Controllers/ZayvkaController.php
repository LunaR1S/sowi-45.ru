<?php

namespace App\Http\Controllers;

use App\Zayvka;
use Illuminate\Http\Request;

class ZayvkaController extends Controller
{
    public function zayvk(Request $request){
        $request->validate([
            'fio' => ['required', 'string'],
            'telephone' => ['required', 'string'],
            'category' => ['required', 'string'],
            'date' => ['required', 'string'],
            'time' => ['required', 'string'],
        ]);
        Zayvka::create([
            'fio' => $request->fio,
            'telephone' => $request->telephone,
            'category' => $request->category,
            'date' => $request->date,
            'time' => $request->time,
        ]);
        return redirect()->route('listzayvka');
    }
}
