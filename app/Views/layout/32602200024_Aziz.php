<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <title>Layouting</title>
</head>

<body>
    <div class="navber">
        <div class="navber-page">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="navber-Sosmet">
            <ul>
                <li>Linkedin</li>
                <li>Instagram</li>
                <li>Facebook</li>
                <li>Whatsapps</li>
            </ul>
        </div>
    </div>
    <div class="navber">
        <span class="name">
            Muhammad Aziz
        </span>
    </div>
    <?= $this->renderSection('content') ?>
</body>

</html>