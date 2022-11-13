<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mon mini blog</title>

</head>

<body>

    <h1>Nos articles</h1>
    <ul> 

            @foreach($articles as $article)

                <li><a href="{{$article->id}}">{{$article->titre}}</a></li>
            @endforeach
    </ul>



</body>

</html>