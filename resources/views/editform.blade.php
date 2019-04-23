<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
    <h1>this is editform</h1>

    <form action="/page/{{$modelforedit->id}}" method="POST">
            @csrf <!--par maprvent yung mga cross side request foldery-->
            @method('PUT')
        <input type="text" name="title" placeholder="Title" value="{{$modelforedit->title}}"><br>
        <textarea name="content">{{$modelforedit->content}}</textarea><br>
            <input type="submit" name="submit" value="submit">
    
    
</body>
</html>