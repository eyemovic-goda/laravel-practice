@extends("layout.helloapp")

@section("title","Board:Index")

@section("menubar")
    @parent
    インデックスページ
@endsection

@section("content")
    @if(count($errors)>0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <table>
        <tr>
            <th>Data</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
        @endforeach
    </table>

    <hr>
    <h2>追加</h2>
    <form action="/board/add" method="post">
        @csrf
        <table>
            <tr>
                <th>person_id</th>
                <td><input type="number" name="person_id" value="{{old("person_id")}}"></td>
            </tr>

            <tr>
                <th>title</th>
                <td><input type="text" name="title" value="{{old("title")}}"></td>
            </tr>
            <tr>
                <th>message</th>
                <td><input type="text" name="message" value="{{old("message")}}"></td>
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
