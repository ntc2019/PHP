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
class Test
{
    public $number = 2;
}

Route::get('user',function(){
    $arr = [1,2,3];

    $a = 1;
    $b = 2;
    echo $a + $b;
    echo 'Nguyen Van A';
    echo 'Nguyen Van Teo';
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    var_dump($arr);
    $test = new Test;
    
    dd($test);
});

Route::get('user/detail/{id}',function($id){
    return $id;
});