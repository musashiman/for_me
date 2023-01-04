<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       
    <body class="antialiased">
        <h1>Edit</h1>
        
        <form class="form" action="/blogs/{{$blog->id}}" method="post">
            @csrf
            @method("put")
            <h2 class="title">title</h2>
            <input name="blog[title]" type="text" value="{{$blog->title}}"/><br>
            <p class="title_error" style="color:red">{{$errors->first("blog.title")}}</p>
            <h2 class="body">body</h2>
            <textarea name="blog[body]" >{{$blog->body}}</textarea><br>
            <p class="body_error" style="color:red">{{$errors->first("blog.body")}}</p>
            
            <input type="submit" value="更新"/>
        </form>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
        
    </body>
</html>
