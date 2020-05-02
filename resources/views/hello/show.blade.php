@extends("layout.helloapp")

@section("title","Show")

@section("menubar")
    @parent
    詳細ページ
@endsection

@section("content")
    @foreach($items as $item)
        <ul>
            <li>{{$item->id}}</li>
            <li>{{$item->name}}</li>
            <li>{{$item->mail}}</li>
            <li>{{$item->age}}</li>
        </ul>
    @endforeach
@endsection

@section("footer")
    copyright 2020 goda
@endsection
