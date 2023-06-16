@extends('layouts.barredadmin')
@section('content')
<h1>Tout les Articles</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom d'article</th>
      <th scope="col">Stock</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
  @foreach($articles as $item)
  <tr>
    <th scope="row">{{$item->id}}</th>
    <td>{{$item->nom}}</td>
    <td>{{$item->prix}}</td>
    <td>{{$item->en_stock}}</td>
    <td>{{$item->description}}</td>
    <td><img src="/images/{{$item->image}}" alt="" style="width: 100px; height: 100px;"></td>
    <td>
    <form action="/admin/delete/{{$item->id}}">
  
    <button type="submit" >delete</button>
</form>

        <form action="/admin/edit/{{$item->id}}">
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
        
    </td>
  </tr>
@endforeach

  </tbody>
</table>

@endsection