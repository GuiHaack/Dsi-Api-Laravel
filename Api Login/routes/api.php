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
Route::post('user/register', 'APIRegisterController@register');
Route::post('user/login', 'APILoginController@login');

Route::middleware('jwt.auth')->get('users', function(Request $request) {
    return auth()->user();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//ROTAS PARA PRODUTO//
Route::get("produto","ProdutoController@getAll");
Route::get("produto/{produto}","ProdutoController@show");
Route::post("produto","ProdutoController@store");
Route::patch("produto/{produto}","ProdutoController@update");
Route::delete("produto/{produto}","ProdutoController@delete");

//ROTAS PARA TRABALHADOR//
Route::get("worker","WorkerController@getAll");
Route::get("worker/{worker}","WorkerController@show");
Route::post("worker","WorkerController@store");
Route::patch("worker/{worker}","WorkerController@update");
Route::delete("worker/{worker}","WorkerController@delete");

//ROTAS PARA LANÇAMENTOS//
Route::get("down_payment","Down_paymentController@getAll");
Route::get("down_payment/{down_payment}","Down_paymentController@show");
Route::post("down_payment","Down_paymentController@store");
Route::patch("down_payment/{down_payment}","Down_paymentController@update");
Route::delete("down_payment/{down_payment}","Down_paymentController@delete");

//ROTAS PARA LISTA DE TRABALHADORES//
Route::get("listastrabalhadore","listastrabalhadoreController@getAll");
Route::get("listastrabalhadore/{listastrabalhadore}","listastrabalhadoreController@show");
Route::post("listastrabalhadore","listastrabalhadoreController@store");
Route::patch("listastrabalhadore/{listastrabalhadore}","listastrabalhadoreController@update");
Route::delete("listastrabalhadore/{listastrabalhadore}","listastrabalhadoreController@delete");

//ROTAS PARA FINANCEIRO//
Route::get("financial","FinancialController@getAll");
Route::get("financial/{Financial}","financialController@show");
Route::post("financial","FinancialController@store");
Route::patch("financial/{financial}","FinancialController@update");
Route::delete("financial/{financial}","FinancialController@delete");
