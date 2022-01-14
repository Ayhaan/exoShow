@extends('layouts.index')

@section('content')
    <h1>SHOW</h1>
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-body">
                    <h5 class="card-title">Nom : {{$ingredient->nom}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Quantite :{{$ingredient->quantite}}</h6>
                    <p class="card-text">URL :{{$ingredient->lien}}</p>
                    <a href="{{route('ingre.index')}}" class="btn btn-success">Retour</a>
                    <form action="{{route('ingre.destroy', $ingredient->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection