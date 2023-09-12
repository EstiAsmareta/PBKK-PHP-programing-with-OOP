<?php
class Schedule { //membuat class schedule
    //pada baris ini membuat array yang terdiri dari objek hari dan jadwal
    private $dailySchedule = [
        'Hari Senin' => 'Dr. Smith (Dokter Umum) - 08:00 AM - 12:00 PM',
        'Hari Selasa' => 'Dr. Johnson (Dokter Bedah) - 09:00 AM - 01:00 PM',
        'Hari Rabu' => 'Dr. Brown (Dokter Mata) - 10:00 AM - 02:00 PM',
        'Hari Kamis' => 'Dr. Davis (Dokter Anak) - 08:00 AM - 12:00 PM',
        'Hari Jumat' => 'Dr. Wilson (Dokter Penyakit Dalam) - 09:00 AM - 01:00 PM',
    ];

    //membuat fungsi untuk menampilkan daftar array
    public function getDailySchedule() {
        return $this->dailySchedule;
    }
}
?>
