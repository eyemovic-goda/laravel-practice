@extends("layout.helloapp")

@section("title","Person.Index")

@section("menubar")
    @parent
    インデックスページ
@endsection

@section("content")

    <table border="1">
        <tr>
            <th>Person</th>
            <th>Board</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
                <td>
                    @if($item->boards != null)
                        <table border="1">
                            @foreach($item->boards as $board)
                                <tr>
                                    <td>{{$board->getData()}}</td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

@endsection

@section("footer")
    copyright 2020 goda
@endsection
