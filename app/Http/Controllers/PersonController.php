<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $hasItems = Person::has("boards")->get();
        $noItems = Person::doesntHave("boards")->get();

        $params = ["hasItems" => $hasItems, "noItems" => $noItems];
        return view("person.index", $params);
    }

    public function find(Request $request)
    {
        return view("person.find", ["input" => "", "maxAge" => 0, "minAge" => 0]);
    }

    public function search(Request $request)
    {
        $item = Person::nameEqual($request->input)
            ->ageGreaterThan($request->minAge)
            ->ageLessThan($request->maxAge)
            ->first();
        return view("person.find",
            ["input" => $request->input,
                "item" => $item,
                "maxAge" => $request->maxAge,
                "minAge" => $request->minAge]);
    }

    public function add(Request $request)
    {
        return view("person.add");
    }

    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = new Person;
        $form = $request->all();
        unset($form["_token"]);

        $person->fill($form)->save();
        return redirect("/person");
    }

    public function edit(Request $request)
    {
        $person = Person::find($request->id);
        return view("person.edit", ["form" => $person]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = Person::find($request->id);
        $form = $request->all();
        unset($form["_token"]);

        $person->fill($form)->save();
        return redirect("/person");
    }

    public function delete(Request $request)
    {
        return view("person.delete");
    }

    public function remove(Request $request)
    {
        Person::find($request->id)->delete();
        return redirect("/person");
    }
}
