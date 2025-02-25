<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{param}/{paramii}', function ($param, $paramii) {
    return $param. '-' . $paramii;
});

Route::prefix('usuarios')->group(function(){
    Route::get('/edit', function() {
        return 'edit';
    });
    Route::get('/delete', function() {
        return 'delete';
    });
});

Route::get('dados-de-usuarios/{user}', function(\App\Models\User $user) {
    return $user;
});
