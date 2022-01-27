<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Mail\ConactosMailable;
use Illuminate\Support\Facades\Mail;
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

Route::get('/',HomeController::class)->name('home');
// por defecto busca invoke
// de esta forma le decimos que accione la función
                                                       // le ponemos un nombre para poder jalarlo después     
Route::get('cursos',[CursoController::class,'index'])-> name('cursos.index');
Route::get('cursos/create',[CursoController::class,'create'])-> name('cursos.create');
// este es para validar formularioa
            //le creamos una ruta    
Route::post('cursos',[CursoController::class,'store'])->name('cursos.store');   

Route::get('cursos/{curso}',[CursoController::class,'show'])-> name('cursos.show');

//ruta para ctualizar 
Route::get('cursos/{curso}/edit',[CursoController::class,'edit'])->name('cursos.edit');
// llamar a un controlador con laravel 7
// Route::get('cursos/create','CursoController@create');

//ruta para actualizar
                    //recueramos el curso    
Route::put('cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('cursos.destroy');
// Route::get('cursos/{curso}/{categoria}', function ($curso,$categoria) {
//     return "Binvenido al curso $curso de la categoria $categoria";
// });

// ruta con variable opcional

// Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {
//     if($categoria){
//         return "Binvenido al curso $curso de la categoria $categoria";
//     }else{
//         return "Binvenido al curso $curso ..";
//     }
        
// });


// ruta para rutear paginas estaticas
Route::view('nosotros','nosotros')->name('nosotros');

Route::get('contactanos',[ContactanosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos',[ContactanosController::class, 'store'])->name('contactanos.store');
