<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            color: white;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        .form-footer {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
        }
        .form-footer a {
            color: #007bff;
            text-decoration: none;
        }
        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
    <script>
        const previewImage = (event) => {
            const reader = new FileReader();
            reader.onload = () => {
                const output = document.getElementById('profilePicturePreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</head>
<body>
    <div class="form-container">
        <h1>Create Your First Profile Today!</h1>
        <form action="/profile" method="POST" enctype="multipart/form-data">
            <!-- Add CSRF Token for Laravel -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="name">Name to Display</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="bio">What's Your Motto?</label>
                <textarea name="bio" id="bio" placeholder="Create Your Motto Now" cols="50" rows="10">{{ old('bio') }}</textarea>
            </div>
            <div class="form-group">
                <label for="profile_picture">Upload Profile Picture:</label>
                <input type="file" name="profile_picture" id="profile_picture" onchange="previewImage(event)">
            </div>
            <div class="form-group">
                <button type="submit">Create Profile Now</button>
            </div>
        </form>
        <div>
            <img id="profilePicturePreview" src="#" alt="Profile Picture Preview" style="display: none; width: 150px; height: 150px;"/>
        </div>
    </div>
    <script>
        document.getElementById('profile_picture').addEventListener('change', function() {
            document.getElementById('profilePicturePreview').style.display = 'block';
        });
    </script>
</body>
</html>
