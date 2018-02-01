<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->get('/test', function (Request $request) {
	$jsonobject = [
	[
		"color"=>"red",
		"value"=>"#f00"
	],
	[
		"color"=>"green",
		"value"=>"#0f0"
	],
	[
		"color"=>"blue",
		"value"=>"#00f"
	],
	[
		"color"=>"cyan",
		"value"=>"#0ff"
	],
	[
		"color"=>"magenta",
		"value"=>"#f0f"
	],
	[
		"color"=>"yellow",
		"value"=>"#ff0"
	],
	[
		"color"=>"black",
		"value"=>"#000"
	]
];;
    return json_encode($jsonobject);
});
