<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller{
    public function home(){
        $title = "Home";
        return view('site.home')->with(compact('title'));
    }

    public function sobre(){
        $title = "Sobre";
        return view('site.sobre')->with(compact('title'));
    }

    public function contato(){
        $title = "contato";
        return view('site.contato')->with(compact('title'));
    }

    public function faq(){
        $title = "FAQ - Dúvidas Frequentes";
        return view('site.faq')->with(compact('title'));
    }


}
