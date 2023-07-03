<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des articles</title>
</head>
<body>

        @forelse ($article2 as $article)
            <h2>{{$article['title']}}</h2>
            <h3>{{$article['content']}}</h3>
            <hr>
        @empty
            <p>No articles</p>
        @endforelse

</body>
</html>
