<?php 

$mahasiswa = [
    [
        "nama" => "Aditya Fataha",
        "nrp" => "183040115",
        "email" => "dwijaya.183040115@unpas.ac.id"
    ],
    [
        "nama" => "Dwijaya",
        "nrp" => "203040115",
        "email" => "plazmajaya@gmail.com"
    ]
];

// $dbh = new PDO('mysql:host=localhost;dbname=pw', 'root', 'root')
// $db = $dbh->prepare('SELECT * FROM mahasiswa')
// $db->execute();
// $mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data

?>