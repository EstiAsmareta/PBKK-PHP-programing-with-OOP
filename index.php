<?php
require_once 'Queue.php'; //ini untuk mengimpor (include) file Queue.php
require_once 'Schedule.php'; //ini untuk megimpor file Schedule.php
require_once 'Hospital.php'; //ini untuk mengimpor file Hospital.php

$queue = new Queue(); //Membuat objek dari kelas Queue untuk mengelola antrian

//bari ini untuk menambahkan elemen ke dalam antrian dengan enqueue
$queue->enqueue(" 1");
$queue->enqueue(" 2");
$queue->enqueue(" 3");

//bari ini untuk menghapus dua elemen dalam antrian dengan dequeue
echo "Dequeued Item: " . $queue->dequeue() . "<br>";
echo "Dequeued Item: " . $queue->dequeue() . "<br>";

//bari ini untuk menampilkan antrian saat ini dengan getQueue
echo "Antrian Sekarang: " . implode(", ", $queue->getQueue());
?>

<?php

//baris ini untuk membuat objek dari kelas Schedule yang digunakan untuk mengakses jadwal harian
$scheduleList = new Schedule();
$schedule = $scheduleList->getDailySchedule();
?>

<?php

//baris ini untuk membuat objek dari kelas Doctor untuk mengakses daftar doker
$doctorList = new Doctor();
$doctors = $doctorList->getDoctorsList();
?>

<!-- Baris berikut ini untuk membuat dokumen HTML yang berisi informasi
jadwal harian rumah sakit dan daftar dokter
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudut Informasi</title>
</head>
<body>
<h1>Jadwal Harian Rumah Sakit</h1>
    <table border="1">
        <tr>
            <th>Hari</th>
            <th>Jadwal</th>
        </tr>
        <?php foreach ($schedule as $day => $doctorSchedule)://membuat perulangan
            ?>
            <tr>
                <td><?= $day ?></td> <!--mengambil objek $day ke dalam kolom Hari-->
                <td><?= $doctorSchedule ?></td> <!--mengambil objek $doctorSchedule ke dalam kolom Jadwal-->
            </tr>
        <?php endforeach; //membuat perulangan?>
    </table>
    <h1>Daftar Dokter</h1>
    <ul>
        <?php foreach ($doctors as $doctor => $specialization): //membuat perulangan?>
            <li><?= $doctor ?> - <?= $specialization ?></li> <!--mengambil objek $doctor dan objek $specialization-->
        <?php endforeach; ?>
    </ul>
</body>
</html>
