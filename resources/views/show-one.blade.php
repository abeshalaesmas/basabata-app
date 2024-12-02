<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>CHAPTER {{$chapter->id}}: {{$chapter->title}}</h1>

        <form action="{{url('/chapters')}}" method="GET">
            <button type="submit">Go Back</button>
        </form>
    </header>

    <main>
        <p>{{$chapter->content}}</p>
    </main>

    <form action="{{Route('edit', ['id' => $chapter->id])}}" method="GET">
        <button type="submit">edit</button>
    </form>

    
</body>
</html>
