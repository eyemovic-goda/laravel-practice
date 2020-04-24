@extends("layout.helloapp")

@section("title","Index")

@section("menubar")
    @parent
    テストです
@endsection

@section("content")
    <p>これが本文のコンテンツです</p>

    @include("components.message",["msg_title"=>"タイトルだす",
"msg_content"=>"コンテンと"])

@endsection

@section("footer")
    copyright 2020 goda
@endsection
