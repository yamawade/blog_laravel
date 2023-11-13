@extends('nav')

@section('contenue')
    <div class="container">
        <div class="row">  
            <div class="col-md-3 mt-4">
                <div class="card">
                    <div class="card-header">
                        Article
                    </div>
                    <div class="card mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                            <rect width="100%" height="100%" fill="#868e96"></rect>
                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                        </svg>
                        <div class="card-body">
                            <h5 class="card-title">{{$article->titre}}</h5>
                            <h5 class="card-title"><b>{{$article->contenu}}</b></h5>
                            @foreach($categorie as $c)
                                @if($c->id == $article->categorie_id)
                                    <h5 class="card-title">{{$c->nom_categorie}}</h5>
                                @endif
                            @endforeach
                            <!-- <a href="#" class="btn btn-primary">Détails</a> -->
                        </div>
                        <div class="card-body">
                            <a href="{{'/article/'.$article->id}}" class="btn btn-secondary offset-4">Voir plus</a>
                            <!-- <a href="#" class="btn btn-danger">Supprimer</a> -->
                        </div>
                        <div class="card-footer text-muted">
                            {{$article->created_at}}
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </div>
@endsection