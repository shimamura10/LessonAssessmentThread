<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }

   public function show(Post $post)
    {
        // Eloquent モデルを使用してコメントデータを取得
        $comments = Post::where('lesson_id', $post->id)->select('comment', 'atmosphere','task_amount')->get();
    
        // ビューにデータを渡す
        return view('posts.show', [
            'post' => $post,
            'comments' => $comments,
        ]);
    }

    public function create(Category $category)
    {
        return view('posts/create')->with(['categories' => $category->get()]);
    }

    public function store(Post $post, Request $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }
    public function comment(Post $post)
    {
        return view('posts.comment_create')->with(['post' => $post]);
    }
}
