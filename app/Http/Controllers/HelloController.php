<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::orderBy("id", "desc")
            ->simplePaginate(3);

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
        $params = ["age" => $request->age,
            "mail" => $request->mail,
            "name" => $request->name];

        DB::table("people")->insert($params);

        return redirect("/hello");
    }

    public function edit(Request $request)
    {
        $id = $request->id;

        $items = DB::table("people")
            ->where("id", $id)
            ->get();

        return view("hello.show", ["items" => $items, "id" => $id]);
    }

    public function update(Request $request)
    {
        $params = ["age" => $request->age,
            "mail" => $request->mail,
            "name" => $request->name];

        DB::table("people")
            ->where("id", $request->id)
            ->update($params);

        return redirect()->route("hello.edit", ["id" => $request->id, "godaa" => "はげ"]);
    }

    public function delete(Request $request)
    {
        $item = DB::table("people")
            ->where("id", $request->id)
            ->first();

        return view("hello.delete", ["item" => $item]);
    }

    public function remove(Request $request)
    {
        DB::table("people")
            ->where("id", $request->id)
            ->delete();

        return redirect("/hello");
    }

    public function rest(Request $request)
    {
        return view("hello.rest");
    }

    public function ses_get(Request $request)
    {
        $ses_data = $request->session()->get("msg");
        return view("hello.session", ["session_data" => $ses_data]);
    }

    public function ses_post(Request $request)
    {
        $msg = $request->input;
        $request->session()->put("msg", $msg);

        return redirect("hello/session");
    }
}
