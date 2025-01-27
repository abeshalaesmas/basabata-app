<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{asset('js/shuffles/shuffle-10.js')}}"></script>
    <style>
        .word-container {
            margin: 20px;
        }
        .word {
            font-size: 24px;
            font-weight: bold;
        }
        .meaning {
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="word-container">
        <div class="word" id="word"></div>
        <div class="meaning" id="meaning"></div>
    </div>
    <button onclick="shuffleWord()">Shuffle</button>
</body>
</html>
