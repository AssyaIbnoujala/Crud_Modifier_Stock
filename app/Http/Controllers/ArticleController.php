<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    

    public function store(Request $request)
    {
        $request->validate([
            'désignation' => 'required',
            'stock' => 'required|integer|min:0'
        ]);

        Article::create($request->all());
        return redirect()->route('articles.index')
            ->with('success', 'Article créé avec succès');
    }


    public function update_article()
{
    $articles = Article::all();
    return view('articles.stock', compact('articles'));
}

public function edit()
{
    $articles = Article::all();
    return view('articles.index', compact('articles'));
}

public function modifyArticle(Request $request)
    {
        $request->validate([
            'article' => 'required|exists:articles,id',
            'type' => 'required|in:entrée,sortie',
            'quantite' => 'required|numeric|min:1',
        ]);

        $article = Article::findOrFail($request->article);
        if ($request->type === 'entrée') {
            $article->stock += $request->quantite;
        } else {
            $article->stock -= $request->quantite;
        }
        $article->save();
        return redirect('/Article')->with('succes', 'Stock modified successfully');
    }
    

    public function delete_article($id)
{
    $article = Article::findOrFail($id);
    $article->delete();
    
    return redirect()->route('articles.index')->with('success', 'Article deleted successfully!');
}


}





