@extends("layout.helloapp")

@section("title","Person.Index")

@section("menubar")
    @parent
    検索ページ
@endsection

@section("content")
    <form action="/person/find" method="post">
        @csrf
        <p>名前</p>
        <input type="text" name="input" value="{{$input}}">
        <p>最大値</p>
        <input type="number" name="maxAge" value="{{$maxAge}}">
        <p>最小値</p>
        <input type="number" name="minAge" value="{{$minAge}}">
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
