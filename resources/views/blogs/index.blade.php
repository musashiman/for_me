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
        <a href="/blogs/create">create</a>
        <div class="blogs">
            @foreach($blogs as $blog)
           <h2><a class="title" href="/blogs/{{$blog->id}}">{{$blog->title}}</a></h2> 
            <p class="body">{{$blog->body}}</p>
            
            <form id="form_{{$blog->id}}" method="post" action="/blogs/{{$blog->id}}">
                @csrf
                @method("DELETE")
                <button type="button" onclick="deleteAction({{$blog->id}})">DELETE</button>
            </form>
            @endforeach
        </div>
        <div class="paginate">
            {{$blogs->links()}}
        </div>
        
        <script>
            function deleteAction(id)
            {
                'use strict'
                if(confirm("本当に消してもいいですか？\nデータは消えます")){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
 
    </body>
</html>
