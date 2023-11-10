@extends('nav')

@section('contenue')
    <div class="container">
       <div class="row">
            @foreach($article as $a)
                <div class="col-12 col-md-3 mt-4">
                    <div class="card">
                        <div class="card-header">
                            Article
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Titre: {{$a->titre}}</h5>
                            <h5 class="card-title">Contenu: {{$a->contenu}}</h5>
                            <h5 class="card-title">categorie: {{$a->categorie_id}}</h5>
                            <a href="#" class="btn btn-primary">Détails</a>
                        </div>
                    </div>
                </div>
            @endforeach
       </div>
    </div>
@endsection