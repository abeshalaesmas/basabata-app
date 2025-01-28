<html>
<head>
  @extends('components.template')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>El Filibusterismo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }
    /* Custom scrollbar styles */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }
    ::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }
  </style>
</head>


<body>
  @include('components.header')


    <main class="grid grid-cols-2 gap-8">
     
        <img class="rounded-l shadow-lg p-6 flex items-center" src="{{ asset('/images/El Fili.png') }}" alt="Library" id="left-game-img"/>
    
      <section class="bg-yellow-200 rounded-xl shadow-lg p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-4">Kabanata</h3>
        <ul class="space-y-2 max-h-64 overflow-y-auto">
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter1')}}" class="text-gray-800 hover:text-gray-900">Kabanata 1</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter2')}}" class="text-gray-800 hover:text-gray-900">Kabanata 2</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter3')}}" class="text-gray-800 hover:text-gray-900">Kabanata 3</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter4')}}" class="text-gray-800 hover:text-gray-900">Kabanata 4</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter5')}}" class="text-gray-800 hover:text-gray-900">Kabanata 5</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter6')}}" class="text-gray-800 hover:text-gray-900">Kabanata 6</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter7')}}" class="text-gray-800 hover:text-gray-900">Kabanata 7</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter8')}}" class="text-gray-800 hover:text-gray-900">Kabanata 8</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter9')}}" class="text-gray-800 hover:text-gray-900">Kabanata 9</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter10')}}" class="text-gray-800 hover:text-gray-900">Kabanata 10</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter11')}}" class="text-gray-800 hover:text-gray-900">Kabanata 11</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter12')}}" class="text-gray-800 hover:text-gray-900">Kabanata 12</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter13')}}" class="text-gray-800 hover:text-gray-900">Kabanata 13</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter14')}}" class="text-gray-800 hover:text-gray-900">Kabanata 14</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter15')}}" class="text-gray-800 hover:text-gray-900">Kabanata 15</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter16')}}" class="text-gray-800 hover:text-gray-900">Kabanata 16</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter17')}}" class="text-gray-800 hover:text-gray-900">Kabanata 17</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter18')}}" class="text-gray-800 hover:text-gray-900">Kabanata 18</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter19')}}" class="text-gray-800 hover:text-gray-900">Kabanata 19</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter20')}}" class="text-gray-800 hover:text-gray-900">Kabanata 20</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter21')}}" class="text-gray-800 hover:text-gray-900">Kabanata 21</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter22')}}" class="text-gray-800 hover:text-gray-900">Kabanata 22</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter23')}}" class="text-gray-800 hover:text-gray-900">Kabanata 23</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter24')}}" class="text-gray-800 hover:text-gray-900">Kabanata 24</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter25')}}" class="text-gray-800 hover:text-gray-900">Kabanata 25</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter26')}}" class="text-gray-800 hover:text-gray-900">Kabanata 26</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter27')}}" class="text-gray-800 hover:text-gray-900">Kabanata 27</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter28')}}" class="text-gray-800 hover:text-gray-900">Kabanata 28</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter29')}}" class="text-gray-800 hover:text-gray-900">Kabanata 29</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter30')}}" class="text-gray-800 hover:text-gray-900">Kabanata 30</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter31')}}" class="text-gray-800 hover:text-gray-900">Kabanata 31</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter32')}}" class="text-gray-800 hover:text-gray-900">Kabanata 32</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter33')}}" class="text-gray-800 hover:text-gray-900">Kabanata 33</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter34')}}" class="text-gray-800 hover:text-gray-900">Kabanata 34</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter35')}}" class="text-gray-800 hover:text-gray-900">Kabanata 35</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter36')}}" class="text-gray-800 hover:text-gray-900">Kabanata 36</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter37')}}" class="text-gray-800 hover:text-gray-900">Kabanata 37</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter38')}}" class="text-gray-800 hover:text-gray-900">Kabanata 38</a></li>
            <li class="hover:bg-yellow-300 p-2 rounded"><a href="{{route('chapter39')}}" class="text-gray-800 hover:text-gray-900">Kabanata 39</a></li>
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

