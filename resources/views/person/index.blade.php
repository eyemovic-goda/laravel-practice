@extends("layout.helloapp")

@section("title","Person.Index")

@section("menubar")
    @parent
    インデックスページ
@endsection

@section("content")

    <h2>Boardsがある</h2>
    <table border="1">
        <tr>
            <th>Person</th>
            <th>Board</th>
        </tr>
        @foreach($hasItems as $hasItem)
            <tr>
                <td>{{$hasItem->getData()}}</td>
                <td>
                    @if($hasItem->boards != null)
                        <table border="1">
                            @foreach($hasItem->boards as $board)
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

    <h2>Boardsが無い</h2>
    <table border="1">
        <tr>
            <th>Person</th>
        </tr>
        @foreach($noItems as $noItem)
            <tr>
                <td>{{$noItem->getData()}}</td>
            </tr>
        @endforeach
    </table>


@endsection

@section("footer")
    copyright 2020 goda
@endsection
