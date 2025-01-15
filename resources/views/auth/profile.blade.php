<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: blue;
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar h1 {
            margin: 0;
            color: black;
            font-size: 24px;
        }
        .navbar button {
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
            flex-direction: row;
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
            width: 60px;
            padding-left: 50px;
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <img id="logo" src="{{ asset('images/logo-w.png') }}" alt="Profile Image">
            <form action="/logout" method="POST" style="margin: 0;">
                <!-- Add CSRF Token for Laravel -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit">Logout</button>
            </form>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="column">
                <div>
                    @if($user->profile->profile_picture && Storage::exists('public/profile_pictures/' . $user->profile->profile_picture))
                        <img src="{{ asset('storage/profile_pictures/' . $user->profile->profile_picture) }}" alt="Profile Picture" style="width: 150px; height: 150px; border-radius: 50%;">
                    @else
                        <img src="{{ asset('images/default-profile.png') }}" alt="Default Profile Picture" style="width: 150px; height: 150px; border-radius: 50%;">
                    @endif
                </div>
                <form action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="profile_picture">Change Profile Picture:</label>
                    <input type="file" name="profile_picture" id="profile_picture" accept="image/*">
                    <button type="submit">Upload</button>
                </form>
            </div>

            <div class="column">
                <p class="welcome">Welcome, {{ $user->profile->name }}!</p>
                <div class="card">
                    <h3>Profile</h3>
                    <p>Username: {{ $user->user_name }}</p>
                    <p>Bio: {{$user->profile->bio ?? 'Create your motto now!'}}</p>
                    <p>Score: {{$user->profile->score}}</p>
                </div>
            </div>
        
        </div>
        <form action="{{ route('reset.score') }}" method="POST"> {{--for debugging purposes only--}}
            @csrf
            <button type="submit">Reset Score</button>
        </form>

    </section>
    <footer>
        <div class="footer">
            © 2024 Your App Name. All rights reserved.
        </div>
    </footer>
</body>
</html>
