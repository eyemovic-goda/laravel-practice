<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


$html = <<<EOF
<html>
<head>
<title>hallo</title>

<body>
<h1>hallo</h1>
</body>
</head>
</html>
EOF;

Route::get("goda", function () use ($html) {
    return $html;
});
