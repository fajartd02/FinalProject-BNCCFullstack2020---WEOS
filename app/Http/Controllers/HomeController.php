<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    public function index(){
        
        $articles = Article::paginate(5);
        return view('article.home', compact('articles'));
    }

    public function show($slug){
        return view('show', compact('slug'));
    }

    public function create() {
        return view('article.create');
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'required|max:255|min:5',
            'subject' => 'required|min:10',
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->subjects = $request->subject;
        $article->save();

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
