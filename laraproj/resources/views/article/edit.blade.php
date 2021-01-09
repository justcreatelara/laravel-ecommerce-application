<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/articles/{{ $article->id }}" method="POST">
       @method('PUT') 
    @csrf
        
            <label for="title">title</label>
            <input type="text" name="title" value="{{ $article->title }}">
            
            <label for="body">body</label>
            <input type="text" name="body" value="{{ $article->body }}">

            <label for="excerpt">excerpt</label>
            <input type="text" name="excerpt" value="{{ $article->excerpt }}">
            
            <button type="submit">submit</button>
        
        </form>
</body>
</html>