<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit</h1>
    <pre>
    {{$data}}
    </pre>
    <form action="{{route('updateTodo')}}" method="post">
        @csrf
        <input type="text" name="todo" value="{{$data->Title}}">
        <input type="hidden" name="id" value="{{$data->id}}">
        <button type="submit">Update</button>
    </form>
</body>

</html>