@extends("layout.helloapp")

@section("title","Show")

@section("menubar")
    @parent
    詳細ページ
@endsection

@section("content")
    @foreach($items as $item)
        <ul>
            <li>{{$item->name}}</li>
            <li>{{$item->mail}}</li>
            <li>{{$item->age}}</li>
        </ul>
    @endforeach

    <form action="/hello/update" method="post">
        @csrf
        <input type="hidden" value={{$id}} name="id">
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
