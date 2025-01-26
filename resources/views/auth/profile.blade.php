<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            margin: 0;
            padding: 0;
        }
        header h1 {
            margin: 0;
            color: black;
            font-size: 24px;
        }
        .lgout {
            background-color: #ff4757;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        .navbar button:hover {
            background-color: #e84118;
        }
        .container {
            display: flex;

            justify-content: space-between;
            padding: 20px;
        }
        .welcome {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card h3 {
            margin-top: 0;
        }
        .card p {
            margin: 10px 0 0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
        .column {
            flex: 1;
            padding: 10px;
        }
        #logo{
            width: 80px;
            padding: 25px 0px 0px 15px;
            
        }
        #Logout {
            background-color: #ff4757;
            color: #fff;
            border: none;
            margin: 25px 0px 0px 800px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <img id="logo" src="{{ asset('images/logo-w.png') }}" alt="Profile Image">
        <form action="/logout" method="POST" style="margin: 0;">
            <!-- Add CSRF Token for Laravel -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button id="Logout" type="submit">Logout</button>
        </form>
    </header>
    <section>
        <div class="container">

            <div class="card">
                <div>
                    @if(Auth::user()->profile && Auth::user()->profile->profile_picture)
                        <img src="{{ asset('storage/app/private/public/profile_pictures/' . Auth::user()->profile->profile_picture) }}" alt="Profile Picture" style="width: 150px; height: 150px; border-radius: 50%;">
                    @else
                        <p>No profile picture uploaded.</p>
                    @endif
                </div>
                <form id="profilePictureForm" action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="profile_picture">Change Profile Picture:</label>
                    <input type="file" name="profile_picture" id="profile_picture" accept="image/*" onchange="previewImage(event)">
                    <button type="submit">Upload</button>
                </form>
                <div>
                    <img id="profilePicturePreview" src="#" alt="Profile Picture Preview" style="display: none; width: 150px; height: 150px;"/>
                </div>
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
            </div>

            <div class="column">
                <p class="welcome">Welcome, {{ Auth::user()->profile->name }}!</p>
                <p>Score: {{ Auth::user()->profile->score }}</p>
                <div class="card">
                    <p>Username: {{ Auth::user()->user_name }}</p>
                    <p>Email: {{ Auth::user()->email }}</p>
                    <p>Bio: {{ Auth::user()->profile->bio ?? 'Create your motto now!' }}</p>
                </div>
            </div>

        </div>

        <!-- <form action="{{ route('reset.score') }}" method="POST"> {{--for debugging purposes only--}}
            @csrf
            <button type="submit">Reset Score</button>
        </form> -->

    </section>
    @include('components.navbar')
</body>
</html>

