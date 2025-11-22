<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::prefix('/blog')->name('blog.')->group(function () {
Route::get('/', function (Request $request) {
    return [
       "link" => \route('blog.show',['slug'=> 'article 1','id'=>2]),
    ];
})->name('index');

Route::get('/blog/{slug}-{id}', function (string $slug,string $id){
    return[
        "slug" => $slug,
        "id" => $id
    ];
})->where([
   
        'id' => '[0-9]+',
        'slug'=>'[a-z0-9\-]+'
    
    
    ])-> name('show');

});

