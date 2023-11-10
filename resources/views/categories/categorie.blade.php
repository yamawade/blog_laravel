@extends('nav')

@section('contenue')
    <div class="container">
       <div class="row">
            @foreach($categorie as $c)
                <div class="col-12 col-md-3 mt-4">
                    <div class="card">
                        <div class="card-header">
                            Nom Catégorie
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$c->nom_categorie}}</h5>
                            <a href="#" class="btn btn-primary">Détails</a>
                        </div>
                    </div>
                </div>
            @endforeach
       </div>
    </div>
@endsection