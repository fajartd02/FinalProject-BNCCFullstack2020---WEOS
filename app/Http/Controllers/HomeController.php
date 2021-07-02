<?php

namespace App\Http\Controllers;

use Illuminate\Support\str;
use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index(){
        
        $articles = Article::orderBy('id', 'desc')->paginate(6);
        return view('article.home', compact('articles'));
    }

    public function show($slug){
        $article = Article::where('slug', $slug)->first();

        if($article == null)
            abort(404);
        return view('show', compact('article'));
    }

    public function create() {
        return view('article.create');
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'required|max:300|min:3',
            'subject' => 'required|min:3',

        ]);

        // $article = new Article;
        // $article->title = $request->title;
        // $article->subjects = $request->subject;
        // $article->save();

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'subjects' => $request->subject
        ]);

        return redirect('/home');
    }

    public function edit ($id) {
        $article = Article::find($id);
        
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id) {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->subjects = $request->subject;
        $article->save();

        return redirect('/home');
    }

    public function destroy($id) {
        Article::find($id)->delete();

        return redirect('/home');
    }

    public function index2() {
        return view('article.index');
    }
    
    public function cpp() {
        return view('article.cpp');
    }
    
    public function course() {
        return view('article.course');
    }


}
