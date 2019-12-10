<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuanController extends Controller
{
    public function hello() {
        echo "TuanController - Hello";
    }
    public function news() {
        return view('temp.tintuc');
    }
}
