@extends('layouts.barredenavigation')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom d'article</th>
      <th scope="col">Prix</th>
      <th scope="col">description</th>
    </tr>
  </thead>
  <tbody>
  @foreach($panier as $item)
    <tr>
        <th scope="row">{{ optional($item->produit)->id }}</th>
        <td>{{ optional($item->produit)->nom }}</td>
        <td>{{ optional($item->produit)->prix }}</td>
        <td>{{ optional($item->produit)->description }}</td>
        <td>
          <form action="/carts/delete/{{$item->id}}">
          <button type="submit" class="btn btn-danger">Delete</button>

          </form>
        </td>
    </tr>
@endforeach

    
  </tbody>
</table>
@endsection