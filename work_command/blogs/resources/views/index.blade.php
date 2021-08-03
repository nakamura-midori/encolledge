<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>

<h1>Tittle</h1>
<p>[<a href='/posts/create'>create</a>]</p>
<div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->title }}</h2></a>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
</div>
<div class='paginate'>
            {{ $posts->links() }}
</div>
</body>
</html>