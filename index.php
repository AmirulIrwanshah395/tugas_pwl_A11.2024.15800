<?php

    include "Mahasiswa.php";
    $mahasiswaTI = new Mahasiswa();
    $mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');

    print_r($mahasiswaTI->getData());
    echo "<br><br><hr>";

    // Menggunakan data saya sendiri
    $mahasiswaBaru1 = new Mahasiswa();
    $mahasiswaBaru1->setData('A11.2024.15800', 'Amirul Irwanshah', 'Teknik Informatika');

    echo "Output getData() Objek 1: <br>";
    print_r($mahasiswaBaru1->getData());
    echo "<br><br>";
    
    echo "Output tampilData() Objek 1: <br>";
    $mahasiswaBaru1->tampilData();

    $mahasiswaBaru2 = new Mahasiswa();
    $mahasiswaBaru2->setData('A11.2024.15800', 'Amirul Irwanshah', 'Teknik Informatika');

    echo "Output getData() Objek 2: <br>";
    print_r($mahasiswaBaru2->getData());
    echo "<br><br>";
    
    echo "Output tampilData() Objek 2: <br>";
    $mahasiswaBaru2->tampilData();