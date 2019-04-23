<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>addform</title>
</head>
<body>
    <h1>this is addform</h1>
    
        <form action="/page" method="POST">
            @csrf <!--par maprvent yung mga cross side request foldery-->
            <input type="text" name="title" placeholder="Title"><br>
            <textarea name="content"></textarea><br>
            <input type="submit" name="submit" value="submit">

    
</body>
</html>