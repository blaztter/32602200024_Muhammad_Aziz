<!DOCTYPE html>
<html>

<head>
    <title> BAB 4</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
    <header>
        <!-- Header Anda -->
         <h1> Muhammad Aziz</h1>
    </header>

    <nav>
        <!-- Navigasi Anda -->
         <ul>
            <li><a href="/profile-tugas">Halaman Profil</a></li>
            <li><a href="/experience-tugas">Halaman Pengalaman</a></li>
         </ul>
    </nav>

    <main>
        <!-- Konten Utama akan dirender di sini -->
         <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <!-- Footer Anda -->
         <p>Dibuat oleh Muhammad Aziz</p>
    </footer>
</body>

</html>