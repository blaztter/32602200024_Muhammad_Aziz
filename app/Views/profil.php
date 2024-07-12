<?= $this->extend('Layout/indexx') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="box-name">
    <img src="<?= base_url('assets/css/azizzzzz.png') ?>" alt="" style="height: 300px;">
        <div class="nama">Muhammad aziz</div>
        <div class="skill">UI/UX DESIGNER</div>
        
    </div>

<div class="box-detail">
<div class="detail-profile">
<h2>Profil Saya</h2>
<div class="form-detail">
    <table border="0">
    <tr>
        <th>Nama</th>
        <td>Muhammad Aziz</td>
    </tr>
    <tr>
        <th>Umur</th>
        <td>19 Tahun</td>
    </tr>
    <tr>
        <th>Status</th>
        <td>Mahasiswa</td>
    </tr>
</table>
</div>
</div>
    <h2>tentang saya</h2>
    <p>Perkenalkan, nama saya Muhammad Aziz, mahasiswa program studi Teknik Informatika. Saya memiliki minat yang kuat dalam bidang desain antarmuka pengguna (UI), di mana saya berusaha untuk menciptakan pengalaman pengguna yang intuitif dan menarik.</p>

<div class="medsos">
<h2>Hubungi</h2>
<i class="fa-brands fa-linkedin fa-lg"></i>
<i class="fa-brands fa-instagram fa-lg"></i>
<i class="fa-brands fa-facebook fa-lg"></i>
<i class="fa-brands fa-square-whatsapp fa-lg"></i>
</div>
</div>
</div>
</div>
<?= $this->endSection() ?>