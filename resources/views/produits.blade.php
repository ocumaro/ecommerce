@extends('layouts.barredenavigation')
@section('content')

<div class="childcard">
  @foreach($produit as $item)
    <div class="card">
    <form action="/ajouterPanier/{{$item->id}}">
      @csrf
      <button class="btns"> Acheter</button>
           <div class="add-to-cart">
            <img src="/images/cart.png" alt="">
          
        </div>
        </form>
     
        <div class="image">
          <img src="/images/{{$item->image}}" alt="T-Shirt">
        </div>
        <div class="text">
          <h2 class="product-name">{{$item->nom}}</h2>
          <p class="price">{{$item->prix}}DH</p>
          <p>{{$item->description}}</p>
        </div>
        
       
      
    </div>
  @endforeach
</div>



@endsection