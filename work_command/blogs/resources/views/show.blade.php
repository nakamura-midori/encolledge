<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
    <p class-"edit">[<a href="/posts/{{$post->id}}/edit">edit</a>]</p>
    <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
        @csrf
        @method('DELETE')
        <input type="submit" style="display:none"></input> 
        <p>[<span onclick="return deletePost(this)">delete</span>]</p>
    </form>
    <!--<h1 class='title'>{{ $post->title }}</h1>-->
    <div class='post'>
        <h1 class='title'>{{ $post->title }}</h1>
        <p class='body'>{{ $post->body }}</p>
        
    </div>
    <div class='footer'>
        <a href="/">戻る</a>
    </div>
    <script>
        function deletePost(e){
            'use strict'
            if(confirm('削除すると復元できません．\n本当に削除しますか')){
                document.getElementById('form_delete').submit();
            }
        }
    </script>
</body>
</html>