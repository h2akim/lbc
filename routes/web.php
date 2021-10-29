<?php

use App\Models\RouteTest;
use Illuminate\Http\Request;
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
    $routeTest = RouteTest::get();
    return view('app', [ '_routes' => $routeTest ]);
});

Route::post('/route-test', function (Request $request) {
    $name = $request->name;
    $ipAddress = $request->server('SERVER_NAME');
    RouteTest::create([
        'name' => $name,
        'ip_address' => $ipAddress
    ]);

    return redirect('/');
});
