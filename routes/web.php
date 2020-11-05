<?php

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('plantilla');

});
Route::get('/suma', function () {
    return view('formularios.suma');

});

Route::post('suma', function (HttpRequest $request) {
    $suma=$request->numero_uno + $request->numero_dos;
    $request->offsetSet('suma',$suma);
    return view('resultados.suma',['suma'=>$suma]);
});

Route::get('/resta', function () {
    return view('formularios.resta');

});

Route::post('resta', function (HttpRequest $request) {
    $resta=$request->numero_uno - $request->numero_dos;
    $request->offsetSet('resta',$resta);
    return view('resultados.resta',['resta'=>$resta]);
});

Route::get('/multiplicacion', function () {
    return view('formularios.multiplicacion');

});

Route::post('multiplicacion', function (HttpRequest $request) {
    $multiplicacion=$request->numero_uno * $request->numero_dos;
    $request->offsetSet('multiplicacion',$multiplicacion);
    return view('resultados.multiplicacion',['multiplicacion'=>$multiplicacion]);
});