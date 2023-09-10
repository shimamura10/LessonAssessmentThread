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
                    <form method="GET" action="{{ route("index") }}">
                        @csrf
                        <select name="time_id">
                            <option value="0">時限</option>
                            @foreach ($times as $time)
                                <option value="{{ $time->id }}">{{ $time->name }}</option>
                            @endforeach
                        </select>
                        <div>
                            <select id="select-teacher" name="teacher_id">
                                <option value="0">教授</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                            <input type="text" id="serch-input-teacher" placeholder="教授名を検索…">
                            <button onclick="searchTeachers()">検索</button>
                        </div>
                        <div>
                            <select id="select-lesson" name="lesson_id">
                                <option value="0">授業</option>
                                @foreach ($lessons as $lesson)
                                    <option value="{{ $lesson->id }}">{{ $lesson->name }}</option>
                                @endforeach
                            </select>
                            <input type="text" id="serch-input-lesson" placeholder="授業名を検索…">
                            <button onclick="searchLessons()">検索</button>
                        </div>
                        <input type="submit" value="Submit"> <!-- 送信ボタン -->
                    </form>
                </div>
                <div class='paginate'>
                    {{ $lessons->links() }}
                </div>
                
                
                <script>
                    function searchTeachers() {
                        const searchTerm = document.getElementById('serch-input-teacher').value.toLowerCase();
                        const teachers = document.querySelectorAll('#select-teacher option');
                
                        teachers.forEach(teacher => {
                            if(teacher.textContent.toLowerCase().includes(searchTerm)) {
                                teacher.style.display = 'block'; // Matched shop names are displayed
                            } else {
                                teacher.style.display = 'none'; // Non-matching shop names are hidden
                            }
                        });
                    }
                    
                    function searchLessons() {
                        const searchTerm = document.getElementById('serch-input-lesson').value.toLowerCase();
                        const teachers = document.querySelectorAll('#select-lesson option');
                
                        teachers.forEach(teacher => {
                            if(teacher.textContent.toLowerCase().includes(searchTerm)) {
                                teacher.style.display = 'block'; // Matched shop names are displayed
                            } else {
                                teacher.style.display = 'none'; // Non-matching shop names are hidden
                            }
                        });
                    }
                </script>
            </body>
    </x-app-layout>
</html>
