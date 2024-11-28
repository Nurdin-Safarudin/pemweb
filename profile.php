<?php 

session_start();
if($_SESSION['role'] != 'user'){
    session_destroy();
    header('Location:index.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="col-md-12">
        <div class="card m-3">
            <div class="card-header text-center text-danger">
                <h1>Selamat datang <?php echo $_SESSION['name'];?></h1>
                <button><a href="./backend/logout.php" class="btn btn-primary">Logout</a></button>
            </div>
        </div>
    </div>
</div>
</body>
</html>