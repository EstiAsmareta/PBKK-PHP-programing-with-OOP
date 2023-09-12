<?php
class Queue { //membuat class queue
    private $queue = []; //membuat array

    //pada baris ini membuat fungsi untuk membuat serta menambahkan elemen item ke dalam antrian
    public function enqueue($item) {
        $this->queue[] = $item;
    }

    //pada baris ini membuat fungsi untuk menghapus elemen dari antrian
    public function dequeue() {
        if ($this->isEmpty()) { //bari ini membuat kondisi apabila antrian dalam keadaan kosong
            return "Antrian kosong"; //maka sistem akan menampilkan output tersebut.
        }
        return array_shift($this->queue);//jika antrian berisi maka elemen akan dihapus
    }

    //baris ini untuk mengecek apakah atrian kosong
    public function isEmpty() {
        return empty($this->queue);
    }

    //baris ini untuk menampilkan antrian saat ini
    public function getQueue() {
        return $this->queue;
    }
}
?>
