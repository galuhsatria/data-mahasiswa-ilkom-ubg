<?php 
$dataMahasiswa = [
    [
    "nama" => "Galuh Satira",
    "foto" => "asset/galuh.jpeg",
    "NIM" => "2101010050",
    "alamat" => "Janapria",
    "instagram" => "@galuhsatria",
    "email" => "galuhsatria219@gmail.com"
    ],
    [
        "nama" => "Asy Sayffa H.N",
        "foto" => "asset/galuh.jpeg",
        "NIM" => "2101010051",
        "alamat" => "Gerung",
        "instagram" => "@fa.fa",
        "email" => "asysgmail.com"
    ] ,
    [
        "nama" => "Afwan Sudrajat",
        "foto" => "asset/afwan.jpeg",
        "NIM" => "2101010089",
        "alamat" => "Sumbawa Barat",
        "instagram" => "@afwnstdrjt_",
        "email" => "afwansutdrajat@gmail.com"
    ],[
        "nama" => "Elga Alfareza",
        "foto" => "asset/galuh.jpeg",
        "NIM" => "2101010082",
        "alamat" => "Sumbawa Besar",
        "instagram" => "@elga.alfareza.1",
        "email" => "elgaalfareza280602@gmail.com"
    ],[
        "nama" => "Hamsa",
        "foto" => "asset/hamsa.jpeg",
        "NIM" => "2101010055",
        "alamat" => "Sumbawa Besar",
        "instagram" => "@hamsa_",
        "email" => "hamsatp845@gmail.com"
    ]
    ];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css" />

</head>
<body>
    <div class="container">
        <div class="tittle">
            <h2>Data Mahasiswa <br>Ilmu Komputer UBG</h2>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Cari Dong" id="search-input">
        </div>
        <div class="card">
            <ul class="data-mahasiswa">
                <?php foreach($dataMahasiswa as $data) : ?>
                <li>
                
                <img src="<?= $data["foto"] ?>" alt="foto-mahasiswa" class="foto-profil">
                <p><?= $data["nama"]; ?></p>
                <a href="detail.php?nama=<?= $data["nama"]; ?>&foto= <?= $data["foto"]?>&NIM= <?= $data["NIM"]?>&alamat= <?= $data["alamat"]?>&instagram= <?= $data["instagram"]?>&email= <?= $data["email"]?>"><button>Detail</button></a>
                <?php endforeach ?> 
            </ul>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>