<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie = Categorie::all();
        $article = Article::all();
        return view('articles.article',compact('categorie','article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorie = Categorie::all();
        return view('articles.ajoutArticle',compact('categorie'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $articlereq = $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'categorie_id' => 'required'
        ]);

        $article= new Article($articlereq);
        if($article->save()){
            echo 'ajout reussi';
            return back();
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $article= Article::find($id);
        $categorie= Categorie::where('id','=',$article->categorie_id)->get();
        return view('articles.voirPlus',compact('article','categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
