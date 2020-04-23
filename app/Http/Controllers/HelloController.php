<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data = ["data" => [1, 2, 3, 4, 5]];

        return view("hello.index", $data);
    }

    public function post(Request $request)
    {
    }
}
