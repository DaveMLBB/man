<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .login-form {
            width: 100%;
            max-width: 300px; /* Controllo la larghezza massima del form */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .form-control label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }
        .form-control input {
            width: 92%; /* Assicurati che gli input non escono dai bordi */
            max-width: 92%; /* Impedisce agli input di estendersi oltre i loro contenitori */
            padding: 0.75rem;
            border: 2px solid #ccc;
            margin-bottom: 5px;
            border-radius: 4px;
        }
        .btn {
            margin-top: 10px;
            display: block;
            width: 100%;
            padding: 0.75rem;
            font-family: inherit;
            font-size: 1rem;
            text-align: center;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            
            <div class="logo-container" style="text-align:center; margin-bottom:20px;">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" style="max-width:240px;">
            </div>

            <!-- Controllo dei messaggi di errore -->

            @if ($errors->any())
                <div style="color: red; margin-bottom: 15px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required autofocus>
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn">Sign In</button>
            </form>
        </div>
    </div>
</body>
</html>
