@isset($msg)
    {{$msg}}
@else
    {!! "<p>なんか書かいて</p>" !!}
@endisset

<form method="post" action="/hello">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
</form>
