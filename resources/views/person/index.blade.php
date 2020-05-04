@extends("layout.helloapp")

@section("title","Person.Index")

@section("menubar")
    @parent
    インデックスページ
@endsection

@section("content")
    @foreach($items as $item)
        <ul>
            <li>{{$item->name}}</li>
            <li>{{$item->mail}}</li>
            <li>{{$item->age}}</li>
        </ul>

    @endforeach

@endsection

@section("footer")
    copyright 2020 goda
@endsection
