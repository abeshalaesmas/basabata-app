<!DOCTYPE html>
<html lang="en">
<head>
    @extends('components.template')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/siimple-icons/siimple-icons.css" />
    <title>Navigation Bar</title>
</head>
<body>

    <div class="navbar">
        <div class="nav-item">
            <a href="{{route('dashboard')}}">
                {{-- <img src="{{ asset('/images/Icons/home.svg') }}" alt="🏠"> --}}
                <i class="si-home" style="font-size: 35px"></i>
            </a>
        </div>
        <div class="nav-item">
            <a href="{{route('glossary')}}">
                {{-- <img src="{{ asset('/images/Icons/book-icon.svg') }}" alt="📖"> --}}
                <i class="si-book" style="font-size: 35px"></i>
            </a>
        </div>
        <div class="nav-item nav-center">
            <a href="{{route('profile')}}">
                {{-- <img src="{{ asset('/images/Icons/bulb-icon.svg') }}" alt="💡"> --}}
                <i class="si-lightbulb" style="font-size: 40px"></i>
            </a>
        </div>
        
        <div class="nav-item">
            <a href="{{route('profile')}}">
                {{-- <img src="{{ asset('/images/Icons/saved-icon (1).svg') }}" alt="❤️"> --}}
                <i class="si-bookmark" style="font-size: 35px"></i>
            </a>
        </div>
        <div class="nav-item">
            <a href="{{route('profile')}}">
                {{-- <img src="{{ asset('/images/Icons/profile.svg') }}" alt="Me"> --}}
                <i class="si-user" style="font-size: 35px"></i>
            </a></div>
    </div>
</body>
</html> 