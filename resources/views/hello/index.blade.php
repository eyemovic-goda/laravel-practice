@extends("layout.helloapp")

@section("title","Index")

@section("menubar")
    @parent
    インデックスページ
@endsection

@section("content")
    @if(Auth::check())
        <p>USER:{{$user->name. "(".$user->email . ")"}}</p>
    @else
        <p>ログインしてません<a href="/login">ログイン</a> |
            <a href="/register">登録</a>
        </p>
    @endif


    <a href="/hello?sort=id">id</a>
    <a href="/hello?sort=name">name</a>
    <a href="/hello?sort=mail">mail</a>
    <a href="/hello?sort=age">age</a>

    @foreach($items as $item)
        <ul>
            <li>{{$item->name}}</li>
            <li>{{$item->mail}}</li>
            <li>{{$item->age}}</li>
        </ul>

    @endforeach

    {{$items->appends(["sort"=>$sort])->links("vendor.pagination.bootstrap-4")}}

    <form action="/hello/add" method="post">
        @csrf

        <table>
            <tr>
                <th>name</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>mail</th>
                <td><input type="text" name="mail"></td>
            </tr>
            <tr>
                <th>age</th>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>

        </table>
    </form>

@endsection

@section("footer")
    copyright 2020 goda
@endsection
