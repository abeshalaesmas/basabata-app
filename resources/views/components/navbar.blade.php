<!DOCTYPE html>
<html lang="en">
<head>
    @extends('components.template')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="footer">
        <div class="nav-item">
            <img src="{{ asset('/images/Icons/home.svg') }}" alt="🏠">
        </div>
        <div class="nav-item">
            <img src="{{ asset('/images/Icons/book-icon.svg') }}" alt="📖">
        </div>
        <div class="nav-item">
            <img src="{{ asset('/images/Icons/bulb-icon.svg') }}" alt="💡">
        </div>
        
        <div class="nav-item">
            <img src="{{ asset('/images/Icons/saved-icon(1).svg') }}" alt="❤️">

        </div>
        <div class="nav-item">
            <a href="{{route('profile')}}">
            <img src="{{ asset('/images/Icons/profile.svg') }}" alt="Me">
            </a></div>
    </div>
</body>
</html>