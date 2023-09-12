<?php
class Doctor { //membuat class Doctor
    //pada baris ini membuat array nama dokter dan spesialisnya
    private $doctors = [
        'Dr. Smith' => 'Dokter Umum',
        'Dr. Johnson' => 'Dokter Bedah',
        'Dr. Brown' => 'Dokter Mata',
        'Dr. Davis' => 'Dokter Anak',
        'Dr. Wilson' => 'Dokter Penyakit Dalam',
    ];

    //membuat fungsi untuk menampilkan daftar dokter
    public function getDoctorsList() {
        return $this->doctors;
    }
}
?>
