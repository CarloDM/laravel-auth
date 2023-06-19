<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Composer;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direction = 'asc';
        $posts = Post::orderBy('id', $direction)->paginate(10);
        return view('admin.posts.index', compact('posts', 'direction'));
    }

    public function orderby($direction){
        $direction = $direction === 'asc' ? 'desc' : 'asc';
        $posts = Post::orderBy('id', $direction)->paginate(10);
        return view('admin.posts.index', compact('posts', 'direction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $form = $request->all();
        $new_post = new Post();
        $new_post->title = $form['title'];
        $new_post->slug = Post::generateSlug($form['title']);
        $new_post->text = $form['text'];
        $new_post->reading_time = $form['reading_time'];
        $new_post->date = date('Y-m-d');
        // dd($new_post);
        $new_post->save();
        return redirect()->route('admin.posts.show', $new_post);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post  $post)
    {
      $date = date_create($post->date);
      $dataformattata = date_format($date, 'd/m/y');
      return view('admin.posts.show', compact('post','dataformattata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
