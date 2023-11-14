<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller;
use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use App\Models\Kegiatan;
use App\Models\User;

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
    public function store(StorePostsRequest $request)
    {
        $credentials = $request->validate([
            'judul' => ['required'],
            'kegiatan_id' => ['required'],
            'gambar' => 'image|file|max:1024',
            'body' => ['required'],
        ]);

        if ($request->file('gambar')) {
            $credentials['image'] = $request->file('gamabar')->store('post-images');
        }

        $credentials['user_id'] = auth()->user()->id;
        $credentials['excerpt'] = Str::limit(strip_tags($request->body), 100);
        Posts::create($credentials);

        //return redirect('/dashboard/posts')->with('SuccessPosts', 'Post added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $posts)
    {
        return view('Berita.arsipBerita', [
            'title' => 'All Posts',
            'posts' => Posts::Latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $posts)
    {
        //
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
    public function destroy(Posts $posts)
    {
        //
    }
}
