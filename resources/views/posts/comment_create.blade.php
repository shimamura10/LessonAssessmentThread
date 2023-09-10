<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>【コメント作成】</h1>
        <h2>{{$post->lesson->name}}</h2>
        <p>教授名{{$post->lesson->teacher->name}}</p>
        <p>{{$post->lesson->time->name}}</p>
        <p>作成日:{{$post->lesson->created_at}}</p>
        <label for="rating">雰囲気:</label>
        <select id="rating" name="rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <label for="rating">課題量:</label>
        <select id="rating" name="rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <label for="comment">コメント:</label>
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
        <input type="submit" value="作成"/>
        <div><a href="/posts/{{$post->id}}">戻る</a></div>
    </body>
</html>
