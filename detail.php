<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container-detail">
        <h2>Detail Mahasiswa</h2>
        <div class="main-profil">
        <div class="foto-profil-detail">
            <img src="<?= $_GET["foto"]; ?>" alt="">
        </div>
        <div class="name">
            <h1><?= $_GET["nama"]; ?></h1>
        </div>
</div>
        <div class="detail">
            <ul class="detail-mahasiswa"> 
                <li>NIM :<?= $_GET["NIM"]; ?></li>
                <li>Alamat :<?= $_GET["alamat"]; ?></li>
                <li>Instagram :<?= $_GET["instagram"]; ?></li>
                <li>Email :<?= $_GET["email"]; ?></li>
            </ul>
        </div>

        <a href="index.php"><button class="kembali">Kembali</button></a>
    </div>
</body>
</html>