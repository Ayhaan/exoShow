@extends('layouts.index')

@section('content')
    <h1>Ingrédients Récap</h1>
    <a href="{{route('ingre.create')}}" class="btn btn-primary">Ajouter un ingrédient</a>
    <a href="{{route('admin')}}" class="btn btn-secondary">Retour back</a>


    <div class="row">
        @foreach ($ingredients as $ingre)
            <div class="col-4">
                <div class="card my-4">
                    <div class="card-body">
                        <h5 class="card-title">Nom : {{$ingre->nom}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Quantite :{{$ingre->quantite}}</h6>
                        <p class="card-text">URL :{{$ingre->lien}}</p>
                        <a href="{{route('ingre.show', $ingre->id)}}" class="btn btn-success">Show</a>
                        <form action="{{route('ingre.destroy', $ingre->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach      
    </div>
@endsection