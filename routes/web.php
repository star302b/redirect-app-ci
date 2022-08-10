<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;

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




Route::group(['prefix' => '/'],function (Router $router) {
    $router->get('{funnel_hash}', [\App\Http\Controllers\FunnelRedirect::class, 'index'])->name('funnel');
});
