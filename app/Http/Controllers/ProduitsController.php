<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;


class ProduitsController extends Controller
{
    public function index(){

        $produits = Produit::all();
        return view('dashboard',[
            'produits' => $produits
        ]);
    }

    public function create(){
        return view('produit.create');
    }

    public function store(){

        $data = request()->validate([
            'name'=>'required',
            'price'=>'required',
            'url_img' =>'required'
        ]);


        Produit::create($data);

        return back();
    }

    public function show(Produit $produit){
        return view('produit.show',compact('produit'));
    }

    public function edit(Produit $produit){
        return view('produit.edit',compact('produit'));
    }

    public function update(Produit $produit){
        $data = request()->validate([
            'name'=>'required',
            'price'=>'required',
            'url_img' =>'required'
        ]);

        $produit->update($data);

        return redirect('/produit/'.$produit->id);
    }

    public function destroy(Produit $produit){

        $produit->delete();

        return redirect('dashboard');
    }
}
