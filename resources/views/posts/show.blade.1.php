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
        <div>
            <h2>{{$post->lesson->name}}</h2>
            <p>教授名{{$post->lesson->teacher->name}}</p>
            <p>{{$post->lesson->time->name}}</p>
            <P>雰囲気{{$post->atmosphere}}</P>
            <P>課題量{{$post->task_amount}}</P>
            <p>コメント{{$post->lesson->comments}}</p>
        </div>
        <div>
            <div>
            @foreach($comments as $comment)
                <p>{{ $comment }}</p>
            @endforeach
            </div>
        <div>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
            <a href="/">戻る</a>
        </div>
    </body>
</html>