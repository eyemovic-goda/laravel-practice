<html>
<title>@yield("title")</title>
<body>
<h1>@yield("title")</h1>

@section("menubar")

    <ul>
        <li>@show</li>
    </ul>
    <hr>

    <div style="color: blue">
        @yield("content")
    </div>

    <div style="color: red">
        @yield("footer")
    </div>


</body>
</html>
