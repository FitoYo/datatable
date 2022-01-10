<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', function () {

    return datatables()->eloquent(App\Models\User::query())->addColumn('btn', 'actions')->rawColumns(['btn'])->toJson();

});


// datatable >>>> instalo datatable segun dice la web <<<<<
// sigo >>>>>> instalo con composer el paquete o libreria -> composer require yajra/laravel-datatables-oracle <- 
// sigo >>> tengo que informar en los Providers en (config.app.php)
// >>>  Yajra\DataTables\DataTablesServiceProvider::class, y >>'DataTables' => Yajra\DataTables\Facades\DataTables::class,
// sigo  >>> esta libreria me dice como configurar la ruta API ->return datatables()->eloquent(User::query())->toJson();