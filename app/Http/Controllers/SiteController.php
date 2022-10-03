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

    public function rastreamento(){
        $title = "Rastreamento Veicular";
        return view('site.rastreamento')->with(compact('title'));
    }

    public function seguro(){
        $title = "Seguro";
        return view('site.seguro')->with(compact('title'));
    }

    public function bateria(){
        $title = "Bateria Moura";
        return view('site.bateria')->with(compact('title'));
    }

    public function assistencia(){
        $title = "Assistência Veicular";
        return view('site.assistencia')->with(compact('title'));
    }


}
