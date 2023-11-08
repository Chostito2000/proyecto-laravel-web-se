<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function listarProductos(){
        try{
            DB::connection()->getPDO();
            $nombre_dn = DB::connection()->getDatabaseName();
            alert()->success('Exitoso', $nombre_dn)->toToast();
        }catch(Exception $ex){
            alert()->error('Error', $ex->getMessage())->toToast();
        }

        $productos = Producto::all();
        alert()->success('Operación exitosa!!!', 'Lista de productos')->toToast();
        return view('lista-productos', compact('productos'));
    }

    public function mostrarProducto(Request $request, $id_producto){
        return view('mostrar-producto', compact('id_producto'));
    }
}

