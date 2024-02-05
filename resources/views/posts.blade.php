<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog App</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <section>
        @foreach ($posts as $post)
        <article>
            <h1><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h1>
            <h5>by <a href="authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a></h5>
            <span>{{ $post->date }}</span>
            <p>{{ $post->excerpt }}</p>
        </article>
        @endforeach
    </section>
</body>
</html>