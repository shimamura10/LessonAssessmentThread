<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <title>Blog</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" />
  </head>
  <body>
    <div class="page-title-area">
      <div class="page-title">
        <h1>マイページ</h1>
      </div>
    </div>
    <div class="window">
      <div class="show-area">
        <div class="lessons-area">
          <div class="lessons">
            <div class="posts-area">
              @foreach ($posts as $post)
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
                      <p>投稿者: {{ $post->user->name }}</p>
                    </div>
                    <div class="create-day">
                      <p>{{ $post->created_at }]</p>
                    </div>
                  </div>
                </div>
              </article>
              @endforeach
            </div>
            <div>{{ $posts->links() }}</div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
