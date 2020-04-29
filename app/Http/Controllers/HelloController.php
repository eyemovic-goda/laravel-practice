<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        return view("hello.index", ["msg" => "フォーム入力して"]);
    }

    public function post(HelloRequest $request)
    {
        return view("hello.index", ["msg" => "正しく入力できました"]);
    }
}
