<html>
<title>@yield("title")</title>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
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
        <hr>
        @yield("footer")
    </div>


</body>
</html>
