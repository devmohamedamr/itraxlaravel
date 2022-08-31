<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>update</th>
            <th>delete</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td><a href="category/edit/{{$category->id}}">update</a></td>
            <td><a href="category/delete/{{$category->id}}">delete</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
