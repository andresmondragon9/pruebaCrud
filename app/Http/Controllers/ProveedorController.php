<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Provider;

class ProveedorController extends Controller
{
    public function store(Request $request){
        Provider::create([
            'nombre' => $request->nombre,
        ]);
        return back();
    }

    public function destroy(Provider $provider){
        $provider->delete();
        return back();
    }
}
