<?php
session_start();
if (empty($_SESSION['email'])) {
    header("location: login.php?message=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymBro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="main" style="background-color: #252525;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="Aset/logo.png" alt="Logo" width="45" class="d-inline-block align-text-middle">
                    GymBro
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="exercise.php">Exercise</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="schedule.php">Schedule</a>
                        </li>
                    </ul>
                </div>
                <a href="logout.php" class="btn btn-outline-danger " tabindex="-1" role="button" aria-disabled="true">Log Out</a>
            </div>
        </nav>
    </header>

    <main class="mt-5">
        <section id="main-exercise">
            <h1 class="text-center text-white fw-bold">
                Choose Your Exercises
            </h1>
            <center>
                <div class="mb-4" style="width: 20%;">
                    <form action="" method="POST">
                        <select class="form-select bg-dark text-white" aria-label="Default select example" id="select" name="select" onchange="this.form.submit()">
                            <option selected>Choose Type...</option>
                            <?php
                            include 'koneksi.php';
                            $sql = "SELECT * FROM exercise_type";
                            $query = mysqli_query($konek, $sql);
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?= $data['id_type'] ?>"><?= $data['type_name'] ?></option>
                            <?php } ?>
                        </select>
                    </form>
                </div>
            </center>
        </section>
        <section class="mt-5">
            <?php
            if (isset($_POST['select'])) {
                $id = $_POST['select'];
                include 'koneksi.php';
                $sql = "SELECT * FROM exercise e INNER JOIN exercise_type et ON e.id_type = et.id_type WHERE e.id_type = '$id' AND et.id_type = '$id'";
                $query = mysqli_query($konek, $sql);
                while ($data = mysqli_fetch_array($query)) {
            ?>
                    <center>
                        <div class="card text-bg-dark border-primary mb-3" style="width: 50%;">
                            <img src="Aset/<?= $data['image'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $data['name'] ?></h5>
                                <p class="card-text"><?= $data['description'] ?></p>
                                <p class="card-text"><small class="text-body-secondary"></small><?= $data['type_name'] ?></p>
                            </div>
                        </div>
                    </center>
                <?php }
            } else {
                include 'koneksi.php';
                $sql = "SELECT * FROM exercise e INNER JOIN exercise_type et ON e.id_type = et.id_type";
                $query = mysqli_query($konek, $sql);
                while ($data = mysqli_fetch_array($query)) {
                ?>

                    <center>
                        <div class="card text-bg-dark border-primary mb-3" style="width: 50%;">
                            <img src="Aset/<?= $data['image'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $data['name'] ?></h5>
                                <p class="card-text"><?= $data['description'] ?></p>
                                <p class="card-text"><small class="text-body-secondary"></small><?= $data['type_name'] ?></p>
                            </div>
                        </div>
                    </center>
            <?php }
            } ?>

        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>