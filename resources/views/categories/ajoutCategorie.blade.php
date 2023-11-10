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
                <h5 class="card-header text-center bg-primary text-white">AJOUT CATEGORIE</h5>
                <div class="card-body">
                    <form method="post" action="/AjouterCategorie">
                        @csrf
                        <div class="form-group">
                            <label for="nomCategorie">Nom Categorie</label>
                            <input type="text" class="form-control" id="nomCategorie"  placeholder="Enter une categorie" name="nomCategorie">
                        </div>
                        <button type="submit" class="btn btn-primary offset-4 mt-2">Soumettre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection