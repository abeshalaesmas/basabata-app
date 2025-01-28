<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{asset('js/shuffles/shuffle-2.js')}}"></script>
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
            justify-content: center;
            width: 60%;
            margin: 20px;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 10px;
            background-color: #ffeb3b; /* Yellow background color */
        }
        .word {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .meaning {
            font-size: 18px;
            margin-top: 10px;
            text-align: center;
            color: #666;
        }
        .shuffle-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        .shuffle-button:hover {
            background-color: #45a049;
        }
        .header, .footer {
            text-align: center;
            padding: 10px;
            background-color: #f1f1f1;
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
    <div style="text-align: center;">
        <button class="shuffle-button" onclick="shuffleWord()">Shuffle</button>
    </div>
    @include('components.navbar')
</body>
</html>
