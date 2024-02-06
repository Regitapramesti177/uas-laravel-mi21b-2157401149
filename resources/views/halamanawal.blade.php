<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .bg-orange {
            background-color: orange;
        }

        .btn {
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            opacity: 0.8;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.4); /* Warna transparan untuk latar belakang card */
        }
    </style>
</head>

<body class="bg-orange"> <!-- Mengubah class bg-light menjadi bg-orange -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center">WELCOME</h1>
                        <p class="card-text"></p>
                        <a href="/login" class="btn btn-primary btn-block">Login</a>
                        <a href="/daftar" class="btn btn-primary btn-block">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
