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
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="exercise.php">Exercise</a>
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
        <section id="main-section">
            <img id="main-bg" src="Aset/home.jpg" alt="">
            <h1 class="text-center text-white fw-bold judul">
                TAKE YOUR GYM EXPERIENCE <br> TO THE NEXT LEVEL
            </h1>
            <p class="text-center text-white mt-4 fst-italic sub-judul">Create your own exercise sets, <br> with many exercises to choose.</p>
            <center>
                <a href="create.php" class="btn btn-warning mt-5 align-text-middle fw-bold"><img src="Aset/create.png" width="35px"> CREATE SCHEDULE</a>
            </center>
            <center>
                <a href="support.php" class="btn btn-info mt-2 align-text-middle fw-bold"><img src="Aset/cs.png" width="35px"> CUSTOMER SUPPORT</a>
            </center>
        </section>

        <section></section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>