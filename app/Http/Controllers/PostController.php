<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posty = Post::all();
        return view('post.lista',compact('posty'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.dodaj');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* $test = "<p>".$request['tytul']."</p>store <br> $request";
        return "$test" ;  */ 
        /* $post = new Post();
        $post->tytul = $request['tytul'];
        $post->autor = request('autor');
        $post->email = request('email');
        $post->tresc = request('tresc');
        $post->save(); //zapis do bazy */
        Post::create($request->all());
        return redirect(route('post.index'))->with('message','Dodano poprawnie posta');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //return 'edit';
        return view('post.zmien', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //return 'update';
        $post->update($request->all());
        return redirect(route('post.index'))->with('message','Zmieniono poprawnie posta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
       // return 'destroy';
       $post->delete();
       return redirect(route('post.index'))->with('message','Usunięto poprawnie posta')->with('color','red');
    }
}
