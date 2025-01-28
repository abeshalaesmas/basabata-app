<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script>
        const previewImage = (event) => {
            const reader = new FileReader();
            reader.onload = () => {
                const output = document.getElementById('profilePicturePreview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</head>
<body class="font-sans">
    <header class="flex justify-between items-center  p-4">
        <img id="logo" src="{{ asset('images/logo-w.png') }}" alt="Profile Image" class="w-20">
        <form action="/logout" method="POST" class="m-0">
            <!-- Add CSRF Token for Laravel -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button id="Logout" type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
        </form>
    </header>

    <section class="container mx-auto p-4">
        <div class=" font-serif flex justify-center items-center">
            <!-- <div class="w-full md:w-1/2 p-4">
                <div class="bg-white p-6 rounded-lg shadow-lg">

                    <div class="flex justify-center mb-4">
                        @if(Auth::user()->profile && Auth::user()->profile->profile_picture)
                            <img src="{{ asset('storage/app/private/public/profile_pictures/' . Auth::user()->profile->profile_picture) }}"  class="w-36 h-36 rounded-full">
                        @else
                            <p>No profile picture uploaded.</p>
                        @endif
                    </div>

                    <form id="profilePictureForm" action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data" class="text-center">
                        @csrf
                        <label for="profile_picture" class="block text-sm font-medium text-gray-700 mb-2">Change Profile Picture:</label>
                        <input type="file" name="profile_picture" id="profile_picture" accept="image/*" onchange="previewImage(event)" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 mb-4">
                        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Upload</button>
                    </form>

                    <div class="flex justify-center mt-4">
                        <img id="profilePicturePreview" src="#" alt="Profile Picture Preview" class="hidden w-36 h-36 rounded-full"/>
                    </div>

                </div>
            </div> -->
            <div class="w-full md:w-1/2 p-4 " >
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <p class="text-xl font-bold mb-4">Welcome, {{ Auth::user()->profile->name }}!</p>
                    <p class="mb-4">Score: {{ Auth::user()->profile->score }}</p>
                    <div class="bg-gray-50 p-4 rounded-lg shadow-inner">
                        <p class="mb-2"><strong>Username:</strong> {{ Auth::user()->user_name }}</p>
                        <p class="mb-2"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Bio:</strong> {{ Auth::user()->profile->bio ?? 'Create your motto now!' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.navbar')
</body>
</html>

