<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @extends('components.template')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piliin mo ako</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    
    @include("components.header")
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4 text-yellow-500">QUIZZES</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <a href="{{ route('quiz1') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-black-500 hover:bg-yellow-100">Quiz 1</a>
            <a href="{{ route('quiz2') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">Quiz 2</a>
            <a href="{{ route('quiz3') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">Quiz 3</a>
            <a href="{{ route('quiz4') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">Quiz 4</a>
            <a href="{{ route('quiz5') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">Quiz 5</a>
            <a href="{{ route('quiz6') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">Quiz 6</a>
            <a href="{{ route('quiz7') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">Quiz 7</a>
            <a href="{{ route('quiz8') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">Quiz 8</a>
            <a href="{{ route('quiz9') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">Quiz 9</a>
            <a href="{{ route('quiz10') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">Quiz 10</a>
            <a href="{{ route('quiz11') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">Quiz 11</a>
            <a href="{{ route('quiz12') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">Quiz 12</a>
            <a href="{{ route('quiz13') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">Quiz 13</a>
            <a href="{{ route('quiz14') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">Quiz 14</a>
            <a href="{{ route('quiz15') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">Quiz 15</a>
        </div>
    </div>
    @include('components.navbar')
</body>
</html>
