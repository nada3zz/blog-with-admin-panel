<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\user\Post;
use App\Models\user\Tag;
use App\Models\user\Category;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.show', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category:: all();
        return view('admin.post.post', compact('tags', 'categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subTitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->subTitle = $request->subTitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->cateories);

        return redirect( route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::where('id', $id)->first();
        $tags = Tag::all();
        $categories = Category:: all();
        return view('admin.post.edit', compact('tags','categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'subTitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->subTitle = $request->subTitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->cateories);

        $post->save();

        return redirect( route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect()->back();
    }
}
