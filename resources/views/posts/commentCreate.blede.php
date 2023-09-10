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
        <h1>コメント作成</h1>
      </div>
    </div>
    <div class="window">
      <div class="show-area">
        <div class="lessons-area">
          <div class="lessons">
            <article class="lesson-mypage">
              <div class="lesson-container">
                <h3 class="lesson-name">{{ $lesson->name }}</h3>
                <div class="lesson-info">
                  <p class="time">{{ $lesson->time->name }}</p>
                  <p class="teacher-name">{{ $lesson->teacher->name }}</p>
                </div>
                <div class="points-area">
                  <div class="atmosphere-point">
                    <p>雰囲気:</p>
                    <p class="point">平均{{ $post->atmosphere_average }}</p>
                  </div>
                  <div class="task-point">
                    <p>課題量:</p>
                    <p class="point">平均{{ $post->task_amount_average }}</p>
                  </div>
                </div>
                <div class="lesson-bottom">
                  <div class="comment-count">
                    <p>コメント {{ $lesson->comments }}</p>
                  </div>
                  <div class="create-day">
                    <p>作成日: {{ $lesson->created_at }]</p>
                  </div>
                </div>
              </div>
            </article>
            <div class="comment-title">
              <h2>【評価】</h2>
            </div>
            <form class="comment-create-area" action="#" method="post">
              <select class="comment-select" name="atmosphere">
                <option value="0" selected disabled>雰囲気の評価</option>
                <option value="1">1（悪い）</option>
                <option value="2">2（まあまあ悪い）</option>
                <option value="3">3（普通）</option>
                <option value="4">4（まあまあ良い）</option>
                <option value="5">5（良い）</option>
              </select>
              <select class="comment-select" name="task_amount">
                <option value="0" selected disabled>課題量の評価</option>
                <option value="1">1（少ない）</option>
                <option value="2">2（まあまあ少ない）</option>
                <option value="3">3（普通）</option>
                <option value="4">4（まあまあ多い）</option>
                <option value="5">5（多い）</option>
              </select>
              <textarea class="create-comment" name="comment" rows="4" placeholder="コメントを入力（任意）"></textarea>
              <input class="submit" type="submit" value="作成">
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
    
  </x-app-layout>
</html>
