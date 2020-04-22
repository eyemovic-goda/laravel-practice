<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function __invoke(Request $request, $msg = "殻のメッセージ")
    {
        $data = ["msg" => $msg, "get" => $request->get];

        return view("hello.index", $data);
    }
}
