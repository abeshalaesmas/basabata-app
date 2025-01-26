
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laro Tayo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: 'Arial', sans-serif;
    }
  </style>
</head>
<body class="p-8">
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
            <h3 class="text-xl font-bold text-gray-800 mb-4">PILIIN MO AKO!</h3>
            <img src="https://placehold.co/100x150" alt="quiz" class="rounded-lg mb-4 shadow-xl">
         
        </div>
      </section>

      <section class="bg-yellow-200 rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">IBALASA MO!</h3>
            <img src="https://placehold.co/100x150" alt="quiz" class="rounded-lg mb-4 shadow-xl">
      </section>

    </main>

    <footer class="mt-6 flex justify-center space-x-8">@include('components.navbar')</footer>
  </div>
</body>
</html>

