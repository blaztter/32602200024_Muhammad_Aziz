<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/css.css') ?>">
    <!-- <link rel="stylesheet" type="text/css" href="./assets/css/css.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <title>Bab 5</title>
</head>

<body>
    <nav>
        <ul>
        <li><a href="/profile-tugas">Halaman profile</a></li>
        <li><a href="/experience-tugas">Halaman pengalaman</a></li>
</ul>
    </nav>
    <?= $this->renderSection('content') ?>
    <footer>
        <h2>Dibuat oleh Muhammad Aziz</h2>
        <h5>Praktikum Web Programing</h5>
    </footer>
</body>
<script src="https://kit.fontawesome.com/28d0edff48.js" crossorigin="anonymous"></script>
</html>