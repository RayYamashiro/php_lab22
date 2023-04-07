<!DOCTYPE html >
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<table border="1">
    <thead>
    <tr>
        <th witdh = 10%>ID</th>
        <th>Product name</th>
        <th>Character code</th>
        <th>Description</th>
        <th>Price</th>
        <th>Count of units</th>
        <th>Image</th>
        <th>Category ID</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($view as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->code}}</td>
            <td>{{$row->description}}</td>
            <td>{{$row->price}}</td>
            <td>{{$row->numberUnits}}</td>
            <td><img src= {{$row->urlimg}} style="width:128px;height:128px;"></td>
            <td>{{$row->category_id}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>


