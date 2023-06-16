@extends('layouts.barredadmin')
@section('content')
<h1>Ajouter Article</h1>
<form action="/admin/article-added">
<div class="mb-1">
@error('nom')
    <div class="error-message" style="color:red">{{ $message }}</div>
@enderror
  <label class="form-label">Titre d'article</label>
  <input type="text" class="form-control" placeholder="name@gmail.com" name="nom">
</div>

<div class="col-2">
@error('prix')
    <div class="error-message" style="color:red">{{ $message }}</div>
@enderror
    <label class="form-label">Prix</label>
    <input type="text" id="inputPassword6" class="form-control" name="prix">
  </div>

<div class="mb-3">
@error('description')
    <div class="error-message" style="color:red">{{ $message }}</div>
@enderror
  <label class="form-label">Article description</label>
  <textarea class="form-control" rows="3" name="description"></textarea>
</div>

<div class="mb-3">
@error('image')
    <div class="error-message" style="color:red">{{ $message }}</div>
@enderror
  <label for="formFile" class="form-label">Article image</label>
  <input class="form-control" type="file" id="formFile" name="image">
</div>
<button type="submit" class="btn btn-primary">Ajouter</button>
</form>
@endsection