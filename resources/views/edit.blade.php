<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>EDIT CHAPTER {{$chapter->id}}: {{$chapter->title}}</h1>

    <main>
        <form action="{{Route('update', ['id' => $chapter->id])}}" method="POST">
            @csrf
            @method('PUT')

            <label for="title">Title: </label>
            <input value="{{$chapter->title}}" id="title" name="title">
            <br>
            <label for="content">Content: </label>
            <textarea name="content" id="content" cols="100" rows="100">{{$chapter->content}}</textarea>
            <br>
            <button type="submit">Done Edit</button>
        </form>

        <form action="{{Route('showOne', ['id' => $chapter->id])}}" method="GET">
            <button type="submit">Go Back</button>
        </form>
    </main>
</body>
</html>
