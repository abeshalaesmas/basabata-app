<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{asset('js/shuffles/shuffle-7.js')}}"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .word-container {
            display: flex;
            flex-direction: column;
            align-items: center;
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
    <div class="header">
        <h1>Ibalasa Mo Ako</h1>
    </div>
    <div class="word-container">
        <div class="word" id="word"></div>
        <div class="meaning" id="meaning"></div>
    </div>
    <button onclick="shuffleWord()">Shuffle</button>
    @include('components.navbar')
</body>
</html>
