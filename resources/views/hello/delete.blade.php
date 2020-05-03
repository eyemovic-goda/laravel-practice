@extends("layout.helloapp")

@section("title","Show")

@section("menubar")
    @parent
    詳細ページ
@endsection

@section("content")
    <ul>
        <li>{{$item->name}}</li>
        <li>{{$item->mail}}</li>
        <li>{{$item->age}}</li>
    </ul>

    <form action="/hello/remove" method="post">
        @csrf
        <input type="hidden" value={{$item->id}} name="id">
        <table>
            <tr>
                <th></th>
                <td><input type="submit" value="とりゃあ"></td>
            </tr>

        </table>
    </form>

@endsection

@section("footer")
    copyright 2020 goda
@endsection
