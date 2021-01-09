<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/articles" method="POST">
        @csrf
        
            <label for="title">title</label>
            <input type="text" name="title">
            <p class="help is-danger">{{ $errors->first('title') }}</p>
            
            <label for="body">body</label>
            <input type="text" name="body">

            <label for="excerpt">excerpt</label>
            <input type="text" name="excerpt">
            
            <button type="submit">submit</button>
        
        </form>
</body>
</html>