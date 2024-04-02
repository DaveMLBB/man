{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>@yield('title', env('DASHBOARD_TITLE', 'Default Dashboard Title'))</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            padding: 20px 0;
            position: fixed;
            top: 0;
            bottom: 0;
            box-shadow: 2px 0 5px rgba(0,0,0,0.5);
            z-index: 500;
        }
        .sidebar img.logo, .sidebar a {
            max-width: 80%;
            margin: 0 auto 20px;
            display: block;
            padding: 20px;
            text-decoration: none;
            color: #ffffff;
            font-weight: 500;
        }
        .sidebar a:hover {
            background-color: #007bff;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: calc(100% - 250px);
            position: fixed;
            top: 0;
            left: 250px;
            padding: 10px;
            background-color: #343a40;
            color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.5);
            z-index: 1000;
        }
        .header-buttons {
            display: flex;
            flex-wrap: wrap;
        }
        .header-button {
            padding: 15px 25px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-left: 10px;
            margin-right: 20px;
            white-space: nowrap;
        }
        .header-button:hover {
            background-color: #0056b3;
        }
        .header-button-filtri {
            background-color: #ffa500; 
        }
        .header-button-filtri:hover {
            background-color: #cc8400; 
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="logo">
        <a href="{{ url('/dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="{{ url('/clienti') }}"><i class="fas fa-users"></i> Clienti</a>
        <a href="{{ url('/fornitori') }}"><i class="fas fa-industry"></i> Fornitori</a>
        <a href="{{ url('/preventivi') }}"><i class="fas fa-file-invoice-dollar"></i> Preventivi</a>
        <a href="{{ url('/ddt') }}"><i class="fas fa-truck-loading"></i> DDT</a>


        <!-- Aggiungi altre sezioni qui -->
    </div>
    <div class="header">
        <h1>@yield('header')</h1>
        <div class="header-buttons">
            @yield('header-buttons') 
        </div>
    </div>
    <div class="main-content">
        @yield('content')
    </div>
</body>
</html>
