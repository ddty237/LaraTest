<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;


class ProduitsController extends Controller
{
    public function list(){

        $produits = Produit::all();
        return view('dashboard',[
            'produits' => $produits
        ]);
    }
}
