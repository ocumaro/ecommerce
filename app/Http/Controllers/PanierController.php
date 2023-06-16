<?php

namespace App\Http\Controllers;
use App\Models\Produits;
use Illuminate\Support\Facades\Auth;
use App\Models\Panier;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index($id)
    {
        $panier = Panier::where('user_id', $id)->with('produit')->get();
        
        return view('carts', compact('panier'));
    }
    // public function show($id){
    //     $panier=Panier::findOrfail($id);
    //     return view('cart',compact('panier'));
    // }
    public function addToPanier(Request $request,$id)
    {
        // Retrieve the user and produit IDs from the request or any other source
        $userId = Auth::id();
        $produit = Produits::findOrFail($id);
        $quantite = 1;
    
        // Create a new Panier entry with the provided details
        $panier = new Panier();
        $panier->user_id = $userId;
        $panier->produit_id = $id;
        $panier->quantite = $quantite;
        $panier->save();
    
        // Optionally, you can return a response or redirect
        return redirect()->back();
   


    }
    public function delete($id){
        $article=Panier::findOrfail($id);
        $article->delete();
        return redirect()->back();
    }
}

