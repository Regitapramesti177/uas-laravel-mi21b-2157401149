<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
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

<body class="bg-orange">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('danger'))
                        <p>{{ Session::get('danger') }}</p>
                        @endif
                        <h2 class="card-title text-center">Daftar</h2>
                        <form action="/simpan" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="name" class="form-control" name="name" placeholder="Enter your nama">
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-block">simpan</button>
                            <a href="/halamanawal" class="btn btn-block">kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
