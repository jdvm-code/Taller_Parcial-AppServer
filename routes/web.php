<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    $user = User::first();
    return view('Mails.confirm_account', [
        'user'=>$user
    ]);
});