<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about',function(){;
    return view('about');
});

Route::get('/mahasiswa', function(){
    $npm = [123,124,125,126];
    $nama =['jono','joni','juna','jena'];
    $jumlah = count($npm);
    return view('mahasiswa',compact('npm','jumlah', 'nama'));
});

Route::get('profile',function(){;
    return view('profile');
});

Route::get('tugas',function(){;
    return view('tugas');
});

Route::get('perulangan',function(){
    $nilai_awal = 1;
    $mobil_rusak = 5;
    $jumlah_mobil = 10 ;
    while ($nilai_awal <=100) {
        if ($nilai_awal <= $mobil_rusak) {
            echo "mobil ke- ". $nilai_awal . 'beroperasi dengan baik! <br>';
        }
        $nilai_awal++;
    }
    echo '<hr>';
    for ($i = $mobil_rusak +1; $i <= $jumlah_mobil; $i++) {
        echo 'mobil ke-' . $i . 'dalam kondisi rusak<br>';
    }
});

Route::get('table',function(){;
        return view('table');
});