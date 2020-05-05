@extends("layout.helloapp")

@section("title","Person.Delete")

@section("menubar")
    @parent
    削除ページ
@endsection

@section("content")
    @if(count($errors)>0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="/person/delete" method="post">
        @csrf
        <table>
            <tr>
                <th>ID</th>
                <td><input type="number" name="id"></td>
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
