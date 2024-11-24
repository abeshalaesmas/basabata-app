<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($chapters->isEmpty())
        <li>
            <a href="#">wla pang chapters</a>
        </li>
    @endif

    <main>
        @foreach ($chapters as $chapter)
            <h1>CHAPTER {{$chapter->id}}: {{$chapter->title}}</h1>
            <p>{{$chapter->content}}</p>

            <form action="{{Route('delete', ['id' =>$chapter->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>
            </form>
        @endforeach
    </main>
</body>
</html>
