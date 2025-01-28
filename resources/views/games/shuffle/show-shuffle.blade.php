<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @extends('components.template')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iBalasa mo ako</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    
    @include("components.header")
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4 text-yellow-500">KABANATA</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <a href="{{ route('shuffle1') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 1 </a>
            <a href="{{ route('shuffle2') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 2 </a>
            <a href="{{ route('shuffle3') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 3 </a>
            <a href="{{ route('shuffle4') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 4 </a>
            <a href="{{ route('shuffle5') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 5 </a>
            <a href="{{ route('shuffle6') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 6 </a>
            <a href="{{ route('shuffle7') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 7 </a>
            <a href="{{ route('shuffle8') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 8 </a>
            <a href="{{ route('shuffle9') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 9 </a>
            <a href="{{ route('shuffle10') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 10 </a>
            <a href="{{ route('shuffle11') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 11 </a>
            <a href="{{ route('shuffle12') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 12 </a>
            <a href="{{ route('shuffle13') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 13 </a>
            <a href="{{ route('shuffle14') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 14 </a>
            <a href="{{ route('shuffle15') }}" class="flex items-center justify-center p-4 bg-white shadow-md rounded-lg text-yellow-500 hover:bg-yellow-100">KABANATA 15 </a>
        </div>
    </div>
    @include('components.navbar')
</body>
</html>
