<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-center text-2xl font-bold text-gray-800 mb-6">Create Your First Profile Today!</h1>
        <form action="/profile" method="POST" enctype="multipart/form-data">
            <!-- Add CSRF Token for Laravel -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name to Display</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="bio" class="block text-sm font-medium text-gray-700">What's Your Motto?</label>
                <textarea name="bio" id="bio" placeholder="Create Your Motto Now" cols="50" rows="10" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('bio') }}</textarea>
            </div>
            <div class="mb-4">
                <label for="profile_picture" class="block text-sm font-medium text-gray-700">Upload Profile Picture:</label>
                <input type="file" name="profile_picture" id="profile_picture" onchange="previewImage(event)" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create Profile Now</button>
            </div>
        </form>
        <div>
            <img id="profilePicturePreview" src="{{ asset('storage/app/private/default.png') }}" alt="Profile Picture Preview" class="hidden w-36 h-36 mx-auto mt-4 rounded-full"/>
        </div>
    </div>
</body>
</html>
