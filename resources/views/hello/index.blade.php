@extends("layout.helloapp")

@section("title","Index")

@section("menubar")
    @parent
    メニューバー
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
