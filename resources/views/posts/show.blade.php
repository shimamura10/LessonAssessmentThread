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
            <h1>授業詳細</h1>
          </div>
        </div>
        <div class="window">
          <div class="show-area">
            <div class="lessons-area">
              <div class="lessons">
                <article class="lesson">
                  <div class="lesson-container">
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
                  </div>
                </article>
                <div class="create-btn-area">
                  <div href="/posts/create/{{ $lesson->id }}">
                    <a class="create-btn">コメント投稿</a>
                  </div>
                </div>
                <div class="posts-area">
    
                  @foreach ($comments as $post)
                  <article class="post">
                    <div class="lesson-container">
                      <div class="points-area">
                        <div class="atmosphere-point">
                          <p>雰囲気:</p>
                          <p class="point">{{ $post->atmosphere }}</p>
                        </div>
                        <div class="task-point">
                          <p>課題量:</p>
                          <p class="point">{{ $post->task_amount }}</p>
                        </div>
                      </div>
                      <div class="comment-area">
                        <div class="comment">
                          <p>{{ $post->comment }}</p>
                        </div>
                      </div>
                      <div class="post-bottom">
                        <div class="comment-user">
                          <p>投稿者:{{ $post->user->name }}</p>
                        </div>
                        <div class="create-day">
                          <p>{{ $post->created_at }}</p>
                        </div>
                      </div>
                    </div>
                  </article>
                  @endforeach
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </body>
    </x-app-layout>
</html>