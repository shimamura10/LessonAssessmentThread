<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h2>授業スレッド作成</h2>
        <form action="{{ route('store.lesson') }}" method="POST">
            @csrf
            <div>
                <h2>授業名</h2>
                <input type="text" name="lesson_name">
            </div>
            <div>
                <h2>教授名</h2>
                <input type="text" name="teacher_name">
            </div>
            <div>
                <h2>時限</h2>
                <select name="time_id">
                    <!--value=0が送信されるとエラーになると思われるので、value=0のoptionは作りたくない。作るならvalidationが必要。-->
                    @foreach ($times as $time)
                        <option value="{{ $time->id }}">{{ $time->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="作成"/>
        </form>
        <div><a href="/">戻る</a></div>
    </body>
</html>
