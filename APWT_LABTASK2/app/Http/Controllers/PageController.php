
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function ABCD(){
        $team= array("Name: Islam, Atika  Id: 19-41706-3","Name: Safa  Id: 19-00000-3", "Name: Sharna  Id: 19-11111-3 ", "Name: Safa, Id: 19-22222-3");
        return view('ABCD')
        ->with('ABCD', $team);
    }
    public function aboutUs(){
        return view('aboutUs');
    }
    public function contactUs(){
        return view('contactUs');
    }
}