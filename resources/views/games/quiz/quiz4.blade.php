<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QUIZ APP</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-id" content="{{ auth()->user()->id }}">
</head>
<body>
    <div class="app">
        <h1>Quiz 1</h1>
        <div class="quiz">
            <h2 id="question">Question goes here</h2>
            <div id="answer-buttons">
                <!-- Remove initial buttons to avoid conflicts -->
            </div>
            <button id="revealButton" style="display: none;">Reveal Answer</button>
            <button id="next-btn">Next</button>
        </div>
    </div>
    <script src="{{asset('js/quizzes/quiz-4.js')}}"></script>
</body>
</html>
