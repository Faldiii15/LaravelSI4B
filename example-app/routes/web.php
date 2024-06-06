<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('layout.main');
});

Route::get('about',function(){
    return "Halaman About";
});
Route::get('Profil',function(){
    return view('profil');
});

// route dengan parameter
Route::get('welcome/{salam}',function($salam){
    // return 'selamat '.$salam;
    return view('salam')->with('viewsalam', $salam);   
});

// Route tanpa parameter
// terdapat arrya $list
Route::get('listdata',function(){
    $list = ["Sistem Informasi ","Informatika","Manajemen"];
    return view('listprodi')->with('viewlist',$list);
});

// Route tanpa parameter
// terdapat array $list
Route::get('listdata',function(){
    $list = ["Sistem Informasi","Informatika","Manajemen"];
    $listmhs = [
        ["npm" => 001,"nama" => "Faldi"],
        ["npm" => 002,"nama" => "Jodi"],   
    ];
    return view('listprodi')
    ->with('viewlist',$list)
    ->with('viewmhs',$listmhs); 
});

route::resource('fakultas', FakultasController::class);
route::resource('prodi', ProdiController::class);
route::resource('mahasiswa',MahasiswaController::class);
route::resource('Dashboard',DashboardController::class); 

