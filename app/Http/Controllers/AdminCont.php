<?php

namespace App\Http\Controllers;
use App\Models\Produits;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdminCont extends Controller
{
    public function index(){
        $articles=Produits::all();
        return view('admin.Articles',compact('articles'));
    }
    public function delete($id){
        $article=Produits::findOrFail($id);
        $article->delete();
        return redirect()->back();
    }
    public function edit($id){
        $article=Produits::findOrfail($id);
        return view('admin.update',compact('article'));
    }
    public function Update(Request $request,$id){
        $validation=([
            'nom'=>'required|min:1|max:255',
            'prix'=>'required|min:2',
            'description'=>'required|min:2|max:500',
            'image'=>'required',
        ]);
        $validator = Validator::make($request->all(), $validation);
        if ($validator->fails()) {
            return redirect('/admin/Ajouter-Articles')
                ->withErrors($validator)
                ->withInput();
        } $validation=$request->validate([

        ]);
        $produits=Produits::findOrfail($id);
        $produits->nom=$request->input('nom');
        $produits->prix=$request->input('prix');
        $produits->description=$request->input('description');
        $produits->image=$request->input('image');
        $produits->save();
        return redirect('/admin/Articles');
    }


    public function store(){
        return view('admin.addarticle');
    }
    public function insert(Request $request){
        $validation=([
            'nom'=>'required|min:1|max:255',
            'prix'=>'required|min:2',
            'description'=>'required|min:2|max:500',
            'image'=>'required',
        ]);
        $validator = Validator::make($request->all(), $validation);
        if ($validator->fails()) {
            return redirect('/admin/Articles')
                ->withErrors($validator)
                ->withInput();
        } $validation=$request->validate([

        ]);
        $produits=new Produits;
        $produits->nom=$request->input('nom');
        $produits->prix=$request->input('prix');
        $produits->description=$request->input('description');
        $produits->image=$request->input('image');
        $produits->save();
        return redirect('/admin/Articles');
    }
}


