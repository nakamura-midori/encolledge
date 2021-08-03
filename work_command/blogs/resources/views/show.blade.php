<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
    <p class-"edit">[<a href="/posts/{{$post->id}}/edit">edit</a>]</p>
    <!--<h1 class='title'>{{ $post->title }}</h1>-->
    <div class='post'>
        <h1 class='title'>{{ $post->title }}</h1>
        <p class='body'>{{ $post->body }}</p>
        
    </div>
    <div class='footer'>
        <a href="/">戻る</a>
    </div>
</body>
</html>