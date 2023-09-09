<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
            Index
        </x-slot>
           <body>
                <h1>チーム開発会へようこそ！</h1>
                <h2>授業一覧</h2>
                <div>
                    @foreach ($lessons as $lesson)
                        <div style='border:solid 1px; margin-bottom: 10px;'>
                            <p>
                                授業名：<a href="">{{ $lesson->name }}</a>
                            </p>
                            <p>教授名：{{ $lesson->teacher->name }}</p>
                            <p>時限：{{ $lesson->time->name }}</p>
                            <p>雰囲気平均：{{ $lesson->atmosphere }}</p>
                            <p>課題量平均：{{ $lesson->task_amount }}</p>
                            <p>コメント：{{ $lesson->comments }}</p>
                            <p>作成日：{{ $lesson->created_at }}</p>
                        </div>
                    @endforeach
                </div>
                <h2>検索</h2>
                <div>
                    <select>
                        @foreach ($times as $time)
                            <option>{{ $time->name }}</option>
                        @endforeach
                    </select>
                    <select>
                        @foreach ($teachers as $teacher)
                            <option>{{ $teacher->name }}</option>
                        @endforeach
                    </select>
                    <select>
                        @foreach ($lessons as $lesson)
                            <option>{{ $lesson->name }}</option>
                        @endforeach
                    </select>
                </div>
                <script>
                    
                </script>
            </body>
    </x-app-layout>
</html>
