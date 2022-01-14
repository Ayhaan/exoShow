@extends('layouts.index')

@section('content')
    <h1>BackOffice | Dashboard</h1>
    <a href="{{route('home')}}" class="btn btn-secondary">retour vers le site</a>
    <div class="row">
        <div class="col-6 my-5">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Ingredients</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet.</p>
                  <a href="{{route('ingre.index')}}" class="btn btn-primary">Voir ingré</a>
                </div>
              </div>
        </div>
        <div class="col-6 my-5">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Recette <br> (c'est un exemple non fonctionnel)</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet.</p>
                  <a href="#" class="btn btn-primary">Voir recette</a>
                </div>
              </div>
        </div>
    </div>
@endsection