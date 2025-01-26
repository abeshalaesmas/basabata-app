
<html>
<head>
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
<body class="bg-gradient-to-r from-yellow-300 via-yellow-400 to-orange-400 p-8">
  <div class="max-w-5xl mx-auto">
    <header class="flex justify-between items-center mb-6">
      <div class="flex items-center space-x-2">
        <div class="bg-white rounded-lg p-2 shadow-md">
          <img src="https://placehold.co/40x40" alt="App Logo" class="h-10">
        </div>
        <h1 class="text-white text-3xl font-bold">Nobela</h1>
      </div>
      <i class="fas fa-bell text-white text-2xl"></i>
    </header>
    <main class="grid grid-cols-2 gap-8">
      <section class="bg-yellow-500 rounded-xl shadow-lg p-6 flex items-center">
        <div>
          <img src="https://placehold.co/100x150" alt="Dr. Jose Rizal Illustration" class="rounded-lg mb-4 shadow-xl">
          <h2 class="text-2xl font-bold text-gray-800">El Filibusterismo</h2>
          <p class="text-gray-700">Dr. Jose Rizal<br>Tagalog</p>
          <div class="flex space-x-1 mt-4">
            <i class="fas fa-star text-black"></i>
            <i class="fas fa-star text-black"></i>
            <i class="fas fa-star text-black"></i>
            <i class="fas fa-star text-black"></i>
            <i class="fas fa-star text-black"></i>
          </div>
        </div>
      </section>
      <section class="bg-yellow-200 rounded-xl shadow-lg p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-4">Kabanata</h3>
        <ul class="space-y-2 max-h-64 overflow-y-auto">
            <!-- @foreach ($chapters as $chapter)
            <li>
                <form action="{{ Route('showOne', ['id' => $chapter->id]) }}" method="GET">
                    <button type="submit" class="text-sm font-semibold text-gray-800 hover:underline w-full text-left">
                        {{ $chapter->id }}. {{ $chapter->title }}
                    </button>
                </form>
            </li>
            @endforeach -->

            
        </ul>
        <i class="fas fa-search text-yellow-800 text-2xl absolute top-6 right-6"></i>
      </section>
    </main>
    <footer class="mt-6 flex justify-center space-x-8">
      <i class="fas fa-home text-black text-2xl"></i>
      <i class="fas fa-book text-black text-2xl"></i>
      <i class="fas fa-user text-black text-2xl"></i>
    </footer>
  </div>
</body>
</html>
