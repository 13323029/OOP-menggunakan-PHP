<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About</title>
</head>
<body>
<div class="container">
    
    <h1 class="mt-4">About Me</h1>
    <img src="<?= BASEURL ?>public/img/aku.png" alt="saya" class="rounded-circle shadow">
    <h3 style="color: red;">Halo, Nama saya <?= $data['nama']; ?>, umur saya <?= $data['umur']; ?> tahun, saya adalah seorang <?= $data['pekerjaan']; ?>.</h3>

 </body>
</html> 


