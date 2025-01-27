<html>
<head>
  @extends('components.template')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>El Filibusterismo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: 'Arial', sans-serif;
    }
  </style>
</head>


<body>
  @include('components.header')

{{-- 
  <div class="max-w-5xl mx-auto">
    <header class="flex justify-between items-center mb-6">
      <div class="flex items-center space-x-2">
        <div class="bg-white rounded-lg p-2 shadow-md">
          <img src="https://placehold.co/40x40" alt="App Logo" class="h-10">
        </div>
        <h1 class="text-white text-3xl font-bold">Nobela</h1>
      </div>
      <i class="fas fa-bell text-white text-2xl"></i>
    </header> --}}



    <main class="grid grid-cols-2 gap-8">
     
        <img class="rounded-l shadow-lg p-6 flex items-center" src="{{ asset('/images/El Fili.png') }}" alt="Library" id="left-game-img"/>
    
      <section class="bg-yellow-200 rounded-xl shadow-lg p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-4">Kabanata</h3>
        <ul class="space-y-2 max-h-64 overflow-y-auto">
            <li><a href="{{route('chapter1')}}">Kabanata 1</a></li>
            <li><a href="{{route('chapter2')}}">Kabanata 2</a></li>
            <li><a href="{{route('chapter3')}}">Kabanata 3</a></li>
            <li><a href="{{route('chapter4')}}">Kabanata 4</a></li>
            <li><a href="{{route('chapter5')}}">Kabanata 5</a></li>
            <li><a href="{{route('chapter6')}}">Kabanata 6</a></li>
            <li><a href="{{route('chapter7')}}">Kabanata 7</a></li>
            <li><a href="{{route('chapter8')}}">Kabanata 8</a></li>
            <li><a href="{{route('chapter9')}}">Kabanata 9</a></li>
            <li><a href="{{route('chapter10')}}">Kabanata 10</a></li>
            <li><a href="{{route('chapter11')}}">Kabanata 11</a></li>
            <li><a href="{{route('chapter12')}}">Kabanata 12</a></li>
            <li><a href="{{route('chapter13')}}">Kabanata 13</a></li>
            <li><a href="{{route('chapter14')}}">Kabanata 14</a></li>
            <li><a href="{{route('chapter15')}}">Kabanata 15</a></li>
            <li><a href="{{route('chapter16')}}">Kabanata 16</a></li>
            <li><a href="{{route('chapter17')}}">Kabanata 17</a></li>
            <li><a href="{{route('chapter18')}}">Kabanata 18</a></li>
            <li><a href="{{route('chapter19')}}">Kabanata 19</a></li>
            <li><a href="{{route('chapter20')}}">Kabanata 20</a></li>
            <li><a href="{{route('chapter21')}}">Kabanata 21</a></li>
            <li><a href="{{route('chapter22')}}">Kabanata 22</a></li>
            <li><a href="{{route('chapter23')}}">Kabanata 23</a></li>
            <li><a href="{{route('chapter24')}}">Kabanata 24</a></li>
            <li><a href="{{route('chapter25')}}">Kabanata 25</a></li>
            <li><a href="{{route('chapter26')}}">Kabanata 26</a></li>
            <li><a href="{{route('chapter27')}}">Kabanata 27</a></li>
            <li><a href="{{route('chapter28')}}">Kabanata 28</a></li>
            <li><a href="{{route('chapter29')}}">Kabanata 29</a></li>
            <li><a href="{{route('chapter30')}}">Kabanata 30</a></li>
            <li><a href="{{route('chapter31')}}">Kabanata 31</a></li>
            <li><a href="{{route('chapter32')}}">Kabanata 32</a></li>
            <li><a href="{{route('chapter33')}}">Kabanata 33</a></li>
            <li><a href="{{route('chapter34')}}">Kabanata 34</a></li>
            <li><a href="{{route('chapter35')}}">Kabanata 35</a></li>
            <li><a href="{{route('chapter36')}}">Kabanata 36</a></li>
            <li><a href="{{route('chapter37')}}">Kabanata 37</a></li>
            <li><a href="{{route('chapter38')}}">Kabanata 38</a></li>
            <li><a href="{{route('chapter39')}}">Kabanata 39</a></li>
        </ul>
        <i class="fas fa-search text-yellow-800 text-2xl absolute top-6 right-6"></i>
      </section>
    </main>
    <footer class="mt-6 flex justify-center space-x-8">
      @include('components.navbar')
    </footer>
  </div>
</body>
</html>

