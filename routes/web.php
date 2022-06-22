<?php

//use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Route::get     | Consultar
| Route::post    | Guardar
| Route::delete  | Eliminar
| Route::put     | Actualizar
*/

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('blog', [PageController::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');

    /*    
Route::get('buscar', function (Request $request) {
    //    return view('welcome');
        return $request->all();
    }); 
*/
