<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function master() {
        return view('subview.master');
    }

    public function nav() {
        return view('subview.nav');
    }

    public function about() {
        return view('subview.about');
    }

    public function list() {
        return view('subview.list');
    }

}
