<?php

namespace App\Http\Controllers;
use App\Listzayvka;
use App\pedicure;
use App\Manicure;
use App\children;
use App\Men;
use App\Contact;
use App\Zayvka;
use Illuminate\Http\Request;
use DB;
use Auth;


class PagesController extends Controller
{
    public function register(){
       return view('pages.register');
   }
   public function men(){
    $mens = new Men;
    return view('pages.men', ['mens' =>   $mens->all()]);
    
}



public function children(){
    $childrens = new children;
    return view('pages.children', ['childrens' =>   $childrens->all()]);
    
}
public function manicure(){
    $manicures = new Manicure;
    return view('pages.manicure', ['manicures' =>   $manicures->all()]);
    
}
public function pedicure(){
    $pedicures = new pedicure;
    return view('pages.pedicure', ['pedicures' =>   $pedicures->all()]);
    
}
    public function login(){
        return view('pages.login');
    }
    public function features(){
        return view('pages.features');
    }
    public function about(){
        $applications = DB::table('applications' )->paginate(12);
        return view('pages.about', compact('applications'));

    }
    public function admin(){
        return view('pages.admin');
    }
    public function list(){
        return view('pages.list');
    }

    public function zayvka(){
        $zayvkas = new Zayvka;
        return view('pages.zayvka', ['zayvkas' =>   $zayvkas->all()]);
    }

    public function home(){
        $applications = DB::table('applications' )->paginate(12);
        return view('pages.home', compact('applications'));
    }

    public function create(){
        return view('pages.create');
    }

    public function listzayvka(){
        $zayvkas = new Zayvka;
        return view('pages.listzayvka', ['zayvkas' =>   $zayvkas->all()]);

    }

    public function destroy($id) {
        DB::delete('delete from zayvkas where id = ?', [$id]);
        return redirect()->back();
    }
}
