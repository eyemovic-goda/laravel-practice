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
        $msg = "cookieは存在しません。";
        if ($request->hasCookie("msg")) {
            $msg = "cookie:" . $request->cookie("msg");
        }

        return view("hello.index", ["msg" => $msg]);
    }

    public function post(HelloRequest $request)
    {
        $msg = $request->name;

        // cookieに保存したものをreturnしないと、保存してくれないので、
        // responseメソッドｗお仕様する。
        $response = response()->view("hello.index", ["msg" => $msg . "をくっきに"]);
        $response->cookie("msg", $msg, 10);

        return $response;
    }
}
