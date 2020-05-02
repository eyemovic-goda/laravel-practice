<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table("people")->get(["age", "mail", "name"]);

        return view("hello.index", ["items" => $items]);
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

    public function add(Request $request)
    {
//        return view("hello.index", ["items" => $items]);
    }

    public function show(Request $request)
    {
        $text = $request->text;
        $items = DB::table("people")
            ->where("name", "like", "%" . $text . "%")
            ->orWhere("mail", "like", "%" . $text . "%")
            ->get();

        return view("hello.show", ["items" => $items]);

    }
}
