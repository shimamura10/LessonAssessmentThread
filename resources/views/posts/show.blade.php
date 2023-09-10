<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>授業レビュー</h1>
        <div class="content">
            <h2>{{$post->lesson->name}}</h2>
            <p>教授名{{$post->lesson->teacher->name}}</p>
            <p>{{$post->lesson->time->name}}</p>
            <P>雰囲気{{$post->atmosphere}}</P>
            <P>課題量{{$post->task_amount}}</P>
            <p>コメント{{$post->lesson->comments}}</p>
            <p>作成日:{{$post->lesson->created_at}}</p>
            <p class="comment_create">[<a href="/posts/{{ $post->id }}/comment">コメント投稿</a>]</p>
        </div>
        <div>
            <div class="comment">
            @foreach($comments as $comment)
                <p>{{ $comment->comment }}</p>
                <P>雰囲気{{$comment->atmosphere}}</P>
                <p>課題量{{$comment->task_amount}}</p>
            @endforeach
            </div>
        <div>
            
            <a href="/">戻る</a>
        </div>
    </body>
</html>
