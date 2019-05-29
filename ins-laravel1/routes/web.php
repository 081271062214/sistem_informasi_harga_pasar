<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('/halo', function(){
  return view('blog/halo');
});
