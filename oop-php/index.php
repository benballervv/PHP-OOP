 <?php
include "Mahasiswa.php";
$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');
//latihan 1 dan 2
$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A12.2000.00001', 'Junior', 'Sistem Informasi');
$mahasiswaBaru = new Mahasiswa();
$mahasiswaBaru->setData('A11.2024.12345', 'Alex', 'Teknik Informatika');
//display data
echo "Data Mahasiswa:<br>";
$mahasiswaTI->tampilkanData();
$mahasiswaSI->tampilkanData();
$mahasiswaBaru->tampilkanData();