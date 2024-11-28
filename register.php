<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            width: 300px;
        }
        .register-header {
            background-color: #f8f8f8;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .register-header h2 {
            margin: 0;
            font-size: 18px;
        }
        .register-body {
            padding: 20px;
        }
        .register-body button {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="register-container card">
        <div class="register-header card-header">
            <h2>Halaman Register</h2>
        </div>
        <div class="register-body card-body">
            <form action="./backend/register.php" method="post">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="masukkan nama anda">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="masukkan email anda">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="masukkan password anda">
                </div>
                <div class="form-group">
                    <label for="confirm">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="confirm" name="confirm" placeholder="masukkan konfirmasi password anda">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Register</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>