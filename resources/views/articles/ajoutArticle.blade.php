@extends('nav')

@section('contenue')
@if(count($errors)>0)
    <div class="alert alert-dismissible alert-danger">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    @foreach($errors->all() as $error)
    <strong>Oh snap!</strong> <a href="#" class="alert-link">{{$error}}.
    @endforeach
    </div>  
@endif
    <div class="container">
        <div class="card">
            <div class="col-md-6 offset-3 mt-5">
                <h5 class="card-header text-center bg-primary text-white">AJOUT ARTICLE</h5>
                <div class="card-body">
                    <form method="post" action="/AjouterArticle">
                        @csrf
                        <div class="form-group">
                            <label for="nomArticle">Nom Article</label>
                            <input type="text" class="form-control" id="nomArticle"  placeholder="Enter une article" name="titre">
                        </div>
                        <div class="form-group">
                            <label for="nomContenu">Contenu</label>
                            <input type="text" class="form-control" id="nomContenu"  placeholder="Enter une contenu" name="contenu">
                        </div>
                        <div class="form-group">
                            <label for="nomCategorie">Categorie</label>
                            <select name="categorie_id" id="" class="form-control">
                                <option value="">Choisissez une catégorie</option>
                                @foreach($categorie as $c)
                                <option value="{{$c->id}}">{{$c->nom_categorie}}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form-control" id="nomCategorie"  placeholder="Enter une categorie" name="nomCategorie"> -->
                        </div>
                        <button type="submit" class="btn btn-primary offset-4 mt-2">Soumettre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection