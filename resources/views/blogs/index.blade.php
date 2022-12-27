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
        <h1>Posts</h1>
        <div class="posts">
            @foreach($blogs as $blog)
            <div class="post">
                <h2 class="title">{{$blog->title}}</h2>
                <p class="body">{{$blog->body}}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>
