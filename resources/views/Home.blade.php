@extends('layouts.barredenavigation')
@section('content')
<div class="parent">
<div class="section">
    <h1 class="title"><span class="color">Bienvenue </span><br>sur notre boutique en ligne </h1>
   <p> Découvrez une large gamme de produits pour répondre à vos besoins.</p>
 <a href="#produits"><button> Acheter maintenant</button></a>   <button class="btn2">Reseau Sociaux</button>
</div>
<div class="aspect-ratio-9-16">
  <img src="/images/shopping.jpg" alt="Image description">
</div>
</div>
<div class="cardparent" id="produits">
     <h1>Nos Article</h1>
<div class="childcard">
  @foreach($produit as $item)
 
    <div class="card">
    <a href="/Produits">
  <div class="image">
    <img src="/images/{{$item->image}}" alt="T-Shirt">
  </div>
  <div class="text">
    <h2 class="product-name">{{$item->nom}}</h2>
    <p class="price">{{$item->prix}}DH</p>
    <p>{{$item->description}}</p>
  </div></a>
</div>
@endforeach

</div>
 
@endsection
