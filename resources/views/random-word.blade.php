<!-- resources/views/random-word.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Random Word Generator</title>
</head>
<body>
    <h1>Random Word: {{ $randomWord->word }}</h1>
    <p>Definition: {{ $randomWord->definition }}</p>
    <button onclick="window.location.reload();">Shuffle Word</button>
</body>
</html>
