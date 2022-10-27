<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        return view("productos.index");
    }

    public function show($producto){
        
        if($producto == 'contacto'){
            return redirect('/contacto');
        }

        if($producto == 'nosotros'){
            return redirect('/nosotros');
        }

        if($producto !== 'productos'){
            return view("productos.show", ['producto' => $producto]);
        } else {
            return redirect('/productos');
        }
        }
        
}
