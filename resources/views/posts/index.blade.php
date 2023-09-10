<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <title>Blog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" />
  </head>
  <x-app-layout>
    <x-slot name="header"> Index </x-slot>
    <body>
      <div class="page-title-area">
        <div class="page-title">
          <h1>授業一覧</h1>
        </div>
      </div>
      <div class="window">
        <div class="main-area">
          <div class="lessons-area">
            <div class="sort-area">
              <select class="sort">
                <option value="0" selected>並べ替え</option>
                <option value="1">雰囲気が良い順</option>
                <option value="2">雰囲気が悪い順</option>
                <option value="3">課題が多い順</option>
                <option value="4">課題が少ない順</option>
              </select>
            </div>
            <div class="lessons">
              @foreach ($lessons as $lesson)
              <article class="lesson">
                <div class="lesson-container">
                  <a href="{{ route('show', ['lesson' => $lesson->id]) }}">
                      <h3 class="lesson-name">{{ $lesson->name }}</h3>
                      <div class="lesson-info">
                        <p class="time">{{ $lesson->time->name }}</p>
                        <p class="teacher-name">{{ $lesson->teacher->name }}</p>
                      </div>
                      <div class="points-area">
                        <div class="atmosphere-point">
                          <p>雰囲気:</p>
                          <p class="point">平均{{ $lesson->atmosphere_average }}</p>
                        </div>
                        <div class="task-point">
                          <p>課題量:</p>
                          <p class="point">平均{{ $lesson->task_amount_average }}</p>
                        </div>
                      </div>
                      <div class="lesson-bottom">
                        <div class="comment-count">
                          <p>コメント {{ $lesson->comments }}</p>
                        </div>
                        <div class="create-day">
                          <p>作成日: {{ $lesson->created_at }}</p>
                        </div>
                      </div>
                  </a>
                </div>
              </article>
              @endforeach
            </div>
            <div class='paginate'>
              {{ $lessons->links() }}
            </div>
          </div>
        </div>
        <div class="filter-area">
          <div class="filter-title">
            <h2>【検索】</h2>
          </div>
          <div class="filter-container">
            <form class="filter" action="{{ route("index") }}">
              <select class="time-filter" name="time_id">
                <option value="0" selected>時限</option>
                @foreach ($times as $time)
                <option value="{{ $time->id }}">{{ $time->name }}</option>
                @endforeach
              </select>
              <div class="filter-search-area">
                <input class="filter-search teacher-search" type="text" id="serch-input-teacher" placeholder="教授名を検索…">
                <button class="teacher-filter-btn" type="button" onclick="searchTeachers()">検索</button>
              </div>
              <select class="teacher-filter" id="select-teacher" name="teacher_id">
                <option value="0" selected>教授</option>
                @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
              </select>
              <div class="filter-search-area">
                <input class="filter-search lesson-search" type="text" id="serch-input-lesson" placeholder="授業名を検索…">
                <button class="lesson-filter-btn" type="button" onclick="searchLessons()">検索</button>
              </div>
              <select class="lesson-filter" id="select-lesson" name="lesson_id">
                <option value="0" selected>授業</option>
                @foreach ($lessons as $lesson)
                <option value="{{ $lesson->id }}">{{ $lesson->name }}</option>
                @endforeach
              </select>
              <input class="submit" type="submit" value="検索" />
            </form>
          </div>
        </div>
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
