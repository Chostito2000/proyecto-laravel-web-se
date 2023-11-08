<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PaginaWebController;
use App\Http\Controllers\registropersonawebcontroller;
use App\Http\Controllers\ProductoController;


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
    return view('welcome');
});

Route::get('/nueva-ruta', function () {
    return view('vistaDos');
});

Route::get('/lista-personas',
 [PersonaController::class, 'listarPersona']
)->name('lista-personas');

Route::get('/lista-personas/{id_persona}',
[PersonaController::class, 'mostrarPersona']
)->name('mostrar-personas');

Route::get('/lista-productos', 
[ProductoController::class, 'listarProductos']
)->name('lista-productos');

Route::get('/lista-productos/{id_producto}', 
[ProductoController::class, 'mostrarProducto']
)->name('mostrar-producto');
//------------------------------------------------------------------------------
//Pagina web
Route::get('/pagina-web',
[PaginaWebController::class, 'verPaginaWeb']
)->name('pagina.web');

Route::get('/pagina-web/registro persona',
[registropersonawebcontroller::class, 'registroPersona']
)->name('registro.persona');
//------------------------------------------------------------------------------