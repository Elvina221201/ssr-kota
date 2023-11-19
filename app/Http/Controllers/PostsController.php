<?php

namespace App\Http\Controllers;


use App\Models\Posts;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\UpdatePostsRequest;
use Illuminate\Support\Facades\Storage;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Berita.inputBerita', [
            'kegiatan' => Kegiatan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $credentials = $request->validate([
            'judul' => ['required'],
            'kegiatan_id' => ['required'],
            'image' => 'image|file|max:1024',
            'body' => ['required'],
        ]);

        $credentials['image'] = $request->file('image')->store('post-images');

        $credentials['user_id'] = auth()->user()->id;
        //$credentials['excerpt'] = Str::limit(strip_tags($request->body), 100);
        Posts::create($credentials);

        return redirect('/arsip-berita')->with('SuccessPosts', 'Post added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $posts)
    {
        return view('Berita.arsipBerita', [
            'posts' => Posts::Latest()->paginate(5)
        ]);
    }

    public function show_id(Request $request)
    {
        if (Posts::where('id', $request->id)->first() === null) {
            abort(404);
        }
        return view('Berita.detailBerita', [
            'post' => Posts::where('id', $request->id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $post = Posts::where('id', $request->id);
        return view('Berita.editBerita',[
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostsRequest $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $post = Posts::findOrFail($request->id);

        Storage::delete($post->image);
        $post->delete();

        //Posts::destroy($request->id);
        return redirect('/arsip-berita')->with('SuccessPosts', 'Post has been deleted!');
    }
}
