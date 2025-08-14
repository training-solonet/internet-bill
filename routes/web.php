<?php

use App\Models\Bill;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('index', ['title' => 'Home Page']);
});

Route::post('/', function () {
    return view('index', ['title' => 'Home Page', 'bills' => Bill::check(request(['phone','registId']))->latest()->paginate(12)->withQueryString()]);
});

Route::post('/', function () {
    $filters = request(['registId', 'phone']);

    // Cek kalau salah satu kosong
    if (empty($filters['registId']) || empty($filters['phone'])) {
        return redirect('/')->with('error', 'Nomor registrasi dan nomor telepon wajib diisi.');
    }

    // Simpan filter ke session kalau mau dipakai lagi
    session(['filters' => $filters]);

    // Ambil data dengan scope check
    $bills = Bill::check($filters)->latest()->take(12)->get();

    return view('index', [
        'title' => 'Hasil Pencarian',
        'bills' => $bills
    ]);
});

Route::get('/test', function () {
    return view('test', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/services', function () {
    return view('services', ['title' => 'Services Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});