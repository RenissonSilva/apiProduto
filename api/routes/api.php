<?php

Route::apiResource('produtos','api\ProdutoController');
Route::post('/register','api\AuthController@register');
Route::post('/login','api\AuthController@login');