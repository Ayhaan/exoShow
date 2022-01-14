@extends('layouts.index')
@section('content')
    <h1>Formulaire d'ajout</h1>

    <form method="POST" action="{{route('ingre.store')}}" class="w-50 mx-auto my-5">
        @csrf
        <div class="form-group">
          <label for="nom">Nom ingredient</label>
          <input type="text" class="form-control" id="nom"  name="nom" placeholder="Entrer un nom">
        </div>
        <div class="form-group">
          <label for="quantite">Quantité</label>
          <input type="number" class="form-control" id="quantite" name="quantite" placeholder="Nombre">
        </div>
        <div class="form-group">
          <label for="lien">Lien URL</label>
          <input type="text" class="form-control" id="lien" name="lien" placeholder="URL">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection