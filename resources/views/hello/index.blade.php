@extends("layout.helloapp")

@section("title","Index")

@section("menubar")
    @parent
    テストです</li>
    <li>まじ？</li>
    </ul>

    @parent
    おお
@endsection

@section("content")
    <p>本文</p>
    <p>コンテンツ</p>
@endsection

@section("footer")
    copyright 2020 goda
@endsection
