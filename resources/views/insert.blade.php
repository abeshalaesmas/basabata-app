<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('store')}}" method="POST">
        @csrf
        <label for="title">Title: </label>
        <input type="text" id="title" name="title">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content" cols="100" rows="100"></textarea>
        <br>
        <button type="submit">submit</button>
    </form>

    <form action="{{url('/chapters')}}" method="GET">
        <button type="submit">Go Back</button>
    </form>
</body>
</html>
