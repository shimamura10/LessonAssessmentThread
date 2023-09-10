
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <title>Blog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" />
  </head>
  <x-app-layout>
    <x-slot name="header"></x-slot>
      <body>
        <div class="page-title-area">
          <div class="page-title">
            <h1>授業スレッド作成</h1>
          </div>
        </div>
        <div class="window">
          <div class="show-area">
            <div class="lessons-area">
              <div class="lessons">
                <div class="back"><a href="/">戻る</a></div>
                <form class="lesson-create-area" action="{{ route('store.lesson') }}" method="POST">
                  <input class="lesson-input" type="text" name="lesson_name" placeholder="授業名を入力" />
                  <input class="lesson-input" type="text" name="teacher_name" placeholder="教授名を入力" />
                  <select class="lesson-select" name="time_id">
                    <option value="0" selected disabled>時限を選択</option>
                    @foreach ($times as $time)
                    <option value="{{ $time->id }}"></option>
                    @endforeach
                  </select>
                  <input class="submit" type="submit" value="作成" />
                </form>
              </div>
            </div>
          </div>
        </div>
      </body>
    </x-app-layout>
</html>