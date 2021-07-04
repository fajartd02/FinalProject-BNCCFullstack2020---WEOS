<?php

namespace App\Http\Controllers;

use Illuminate\Support\str;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }


    // public function loginzzz() {

    //     return view('auth.login');
    // }

    public function index(){
        
        $articles = Article::orderBy('id', 'desc')->paginate(6); 
        return view('article.post', compact('articles'));
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

        // dd($request->thumbnail);

        $request->validate([
            'thumbnail' => 'mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required|max:300|min:3',
            'subject' => 'required|min:3',

        ]);

        // $article = new Article;
        // $article->title = $request->title;
        // $article->subjects = $request->subject;
        // $article->save();


        $imgName = null;

        if($request->thumbnail) {
            $imgName = $request->thumbnail->getClientOriginalName()
            . '-'
            . time() . '.' 
            . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('image'), $imgName);
        }

        
        //cara pertama
        Article::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'subjects' => $request->subject,
            'thumbnail' => $imgName
        ]);

        // Auth::user()->articles()->create([
        //     'title' => $request->title,
        //     'slug' => Str::slug($request->title, '-'),
        //     'subjects' => $request->subject,
        //     'thumbnail' => $imgName
        // ]);

        return redirect('/post');
    }

    public function edit ($id) {
        $article = Article::find($id);
        
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id) {

        $request->validate([
            'thumbnail' => 'mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required|max:300|min:3',
            'subject' => 'required|min:3',

        ]);

        $imgName = null;

        if($request->thumbnail) {
            $imgName = $request->thumbnail->getClientOriginalName()
            . '-'
            . time() . '.' 
            . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('image'), $imgName);
        }

        $article = Article::find($id);
        $article->title = $request->title;
        $article->subjects = $request->subject;
        $article->thumbnail = $imgName;
        $article->save();

        return redirect('/post');
    }

    public function destroy($id) {
        Article::find($id)->delete();

        return redirect('/post');
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
