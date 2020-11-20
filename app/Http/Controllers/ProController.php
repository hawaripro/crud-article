<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ProController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->paginate(5);
        return view('article.index', compact('articles'));
    }
    public function show($title)
    {
        $article = Article::where('title', $title)->first();
        return view('article.single', compact('article'));
    }
    public function create()
    {
        return view('article.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|min:1',
            'subject' => 'required|min:1',
        ]);
        // mass assignment
        Article::create([
            'title' => $request->title,
            'subject' => $request->subject
        ]);

    }
    public function edit($id) {
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }
    public function update(Request $request, $id) {
        Article::find($id)->update([
            'title' => $request->title,
            'subject' => $request->subject
        ]);
        return redirect('/artikell');
    }
    public function destroy(Request $request, $id) {
        Article::find($id)->delete([
            'title' => $request->title,
            'subject' => $request->subject
        ]);
        return redirect('/artikell');
    }
}
