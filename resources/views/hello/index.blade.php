@extends("layout.helloapp")

@section("title","Index")

@section("menubar")
    @parent
    テストです
@endsection

@section("content")
    <p>これが本文のコンテンツですね</p>

    {{--    @include("components.message",["msg_title"=>"タイトルだす",--}}
    {{--"msg_content"=>"コンテンと"])--}}

    {{--    <ul>--}}
    {{--        @each("components.item",$data,"item")--}}
    {{--    </ul>--}}

    {{--    <p>びゅーめっせーじ={{$view_message}}</p>--}}

    <p>これは、
        <middleware>google.com</middleware>
        へのリンク
    </p>
    <p>これは、
        <middleware>yahoo.co.jp</middleware>
        へのリンク
    </p>
@endsection

@section("footer")
    copyright 2020 goda
@endsection
