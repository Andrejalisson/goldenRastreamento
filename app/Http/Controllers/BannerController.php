<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function banner(){
        $title = "Banner";
        return view('admin.banner.banner')->with(compact('title'));
    }

}
