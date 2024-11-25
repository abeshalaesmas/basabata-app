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

    <header>
        <img src="" alt="">
        <h1>El Filibusterismo</h1>
        <img src="" alt="">
    </header>
    <main>

        @foreach ($chapters as $chapter)

            <form action="{{Route('showOne', ['id' =>$chapter->id])}}" method="GET">
                <button type="submit">
                    <h1>CHAPTER {{$chapter->id}}: {{$chapter->title}}</h1>
                </button>
            </form>


            <form action="{{Route('delete', ['id' =>$chapter->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>
            </form>
        @endforeach
    </main>
</body>
</html>
