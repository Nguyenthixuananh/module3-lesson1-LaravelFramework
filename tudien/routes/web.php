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

Route::get('/', function (){
   return view('translate');
});

Route::post('/',function (\Illuminate\Http\Request $request){
    $arr_en = ['hello', 'dog', 'spring','cat','white', 'black'];
    $arr_vn = ['Xin chào', 'Con chó', 'Mùa xuân','Con mèo','Màu trắng', 'Màu đen'];
    $key1 = strtolower($request->key);
    foreach ($arr_en as $key => $value){
        if ($key1 == $value) {
            $result = $arr_vn[$key];
            return view('translate', compact(['result']));
        }
    } $result = "Không có chữ vừa nhập";
    return view('translate', compact(['result']));

});
