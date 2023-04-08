<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class actualiteController extends Controller
{
    /** Carriere function */
    public function actualite(){
        
        return view('actualite');
    }

    /**Detail evenement */
    public function detailevenement(){
        
        return view('detailevenement');
    }
}
