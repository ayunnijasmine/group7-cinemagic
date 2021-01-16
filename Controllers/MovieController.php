<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
//use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function moviez() {
        $data = Movie::all();
        return view('movie', ['movies'=>$data]);
    }
}

