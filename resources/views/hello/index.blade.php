<p>{{$msg}}</p>

{{"<p>おお</p>"}}

{!!"<p>$msg</p>"!!}

<form method="post" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
</form>
