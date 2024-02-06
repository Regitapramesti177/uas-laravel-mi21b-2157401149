<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg-orange {
            background-color: orange;
            background-size: cover;
            background-position: center;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn {
            background-color: yellow;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: black;
        }

        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body class="bg-orange">
    <div class="container text-center">
        <h1 class="display-4">Selamat Datang {{ auth()->user()->name }}</h1>
        <p class="lead">{{ auth()->user()->email }}</p>
        <a class="btn btn-primary" href="/halamanawal">Logout</a> <!-- Menggunakan kelas btn btn-primary -->
    </div>
