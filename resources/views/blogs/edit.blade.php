<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Post</title>
    </head>
    <body>
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/blogs/{{ $blog->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='blog[title]' value="{{ $blog->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='blog[body]' value="{{ $blog->body }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
 </body>
</html>