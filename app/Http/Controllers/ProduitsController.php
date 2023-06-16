<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function index1(){
        $produit=Produits::all();
        return view('Produits',compact('produit'));
    }
    public function index2(){
        $produit=Produits::all();
        return view('Home',compact('produit'));
    }
}