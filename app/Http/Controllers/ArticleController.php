<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
//
$articles = Article::all();
$articles = Article::latest()->get();

return view('article.index', compact('articles'));

}

/**
* Show the form for creating a new resource.
*/
public function create()
{
//
$tags = Tag::all();

return view('article.create', compact('tags'));
}

/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{
if ($request->hasFile('img')) {
$img = $request->file('img')->store('img', 'public');
} else {
$img = 'media/default.jpeg'; 
}

Article::create([
'title'       => $request->title,
'subtitle'    => $request->subtitle,
'best_time'   => $request->best_time,
'description' => $request->description,
'img'         => $img 
]);

$article->tags()->attach($request->tags);

return redirect()->back()->with('message', 'Articolo inserito con successo');
}



/**
* Display the specified resource.
*/
public function show(Article $article)
{
//
return view('article.show', compact('article'));
}

/**
* Show the form for editing the specified resource.
*/
public function edit(Article $article)
{
//
return view('article.edit', compact('article'));
}

/**
* Update the specified resource in storage.
*/
public function update(Request $request, Article $article)
{
//
$data = $request->validate([
'title'            => 'required|string|max:255',
'subtitle'         => 'required|string',
'best_time'        => 'required|string',
'description'      => 'required|string',
'img'              => 'nullable|image|max:2048',
]);
if ($request->hasFile('img')) {
$data['img'] = $request->file('img')->store('img', 'public');
} else {
unset($data['img']);
}
$article->update($data);

return redirect()->route('show', $article)->with('success', 'Articolo aggiornato con successo!');
}

/**
* Remove the specified resource from storage.
*/
public function destroy(Article $article)
{
//
$article->delete();

return redirect()->route('index')->with('success', 'Articolo eliminato con successo!');
}
}
