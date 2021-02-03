<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Provider;

class ProductosController extends Controller
{
    public function index(){
        return view('productos.index',[
           'products' => Product::latest()->get(),
           'providers' => Provider::latest()->get()
        ]);
    } 

    public function store(Request $request){
        Product::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad,
            'provider_id' => $request->provider_id,
        ]);
        return back();
    }

    public function destroy(Product $product){
        $product->delete();
        return back();
    }
}
