<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class TuanController extends Controller
{
    public function hello() {
        echo "TuanController - Hello";
    }

    public function news() {
        return view('temp.tintuc');
    }

    public function addnews() {
        // Validate the request...

        $flight = new Flight;

        $flight->name = $request->name;

        $flight->save();
    }
}
