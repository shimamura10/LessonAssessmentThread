<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }


    public function show(Lesson $lesson)
    {
        // Eloquent モデルを使用してコメントデータを取得
        // $comments = Post::where('lesson_id', $post->id)->pluck('comment');
        $comments = Post::where('lesson_id', $lesson->id)->get();    
        // ビューにデータを渡す
        return view('posts.show', [
            'lesson' => $lesson,
            'comments' => $comments,
        ]);
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
    
   public function storeComment(Request $request, Post $post, Lesson $lesson)
    {
        $post->user_id = Auth::user()->id;
        $post->lesson_id = $lesson->id;
        $post->comment = $request->input('comment');
        $post->atmosphere = $request->input('rating_atmosphere');
        $post->task_amount = $request->input('rating_task');
        $post->save();
        
         return redirect('/posts/' . $lesson->id) ;
    }
    
    public function commentCreate(Lesson $lesson)
    {
        return view('posts.commentCreate')->with(['lesson' => $lesson]);
    }
}
