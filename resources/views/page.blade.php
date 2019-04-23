<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page</title>
    <style>
    
        table {
            font-family: arial,sans-serif;
            border-collapse:collapse;
            width:100%
        }
    
        td,th{
            border: 1px solid #dddddd;
            text-align:left;
            padding:8px;
        }
    
        tr:nth-child(even){
            background-color: #dddddd;
        }
    
        .pagination li { 
            color:black;
            float:left;
            padding:8px 16px ;
            transition: 'background-color' .3s;
            list-style-type:none;
    
        }
        .pagination li:hover{
            background:pink;
        }
        </style>
</head>
<body>   
    <table> 
    <tr>
        <th>id</th>  <!-- eto ang pagdidisplay lang natin ng tables ating page-->
        <th>Title</th>
        <th>Content</th>
        <th>Action</th>
    </tr>
    <h1>Page</h1>
    <a href="/page/create">add new article</a>
    @foreach ($modil as $modi)  <!--dito para makuha yung data sa data base at maidisplay sa page-->
    <tr>
    <td>{{$modi->id}}</td>
    <td>{{$modi->title}}</td>
    <td>{{$modi->content}}</td>
    <td><a href="/page/{{$modi->id}}">view</a> <a>|<a href="/page/{{$modi->id}}/edit">edit</a>

        <form action='page/{{$modi->id}}' method="POST"> <!-- gumawa tayo ng bagong form para sa delete (naglagay din tayo ng POST para umiba yung page-->
              @csrf
              @method("DELETE")

            <input type="submit" name="submit" value="Delete">
        </form>
     </td>
    </tr>
        
    @endforeach

    {{$modil->links()}}

</body>
</html>