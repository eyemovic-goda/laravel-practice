@extends("layout.helloapp")

@section("title","Auth")

@section("menubar")
    @parent
    ユーザ認証スページ
@endsection

@section("content")
    <p>{{$message}}</p>
    <form action="/hello/auth" method="post">
        <table>
            @csrf
            <tr>
                <th>mail:</th>
                <td><input type="text" name="email"></td>
            </tr>

            <tr>
                <th>password</th>
                <td><input type="text" name="password"></td>
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
