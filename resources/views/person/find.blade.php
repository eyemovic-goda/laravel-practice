@extends("layout.helloapp")

@section("title","Person.Index")

@section("menubar")
    @parent
    検索ページ
@endsection

@section("content")
    <form action="/person/find" method="post">
        @csrf
        <input type="text" name="input" value="{{$input}}">
        <input type="submit" value="find">
    </form>

    @if(isset($item))
        <ul>
            <li>{{$item->getData()}}</li>
        </ul>
    @endif


@endsection

@section("footer")
    copyright 2020 goda
@endsection
