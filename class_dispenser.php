<?php
//volume dispenser
//gelas daya tampung 250 ml
//satu gelasnya mempunyai biaya atau harga
// fungsi = bisa di isi ulang
// setiap mengambil minuman dalam satu gelas dengan volume 250ml maka volume dispenser berkurang
class Dispenser{
    protected $volume,
              $hargasegelas;
    private   $volumegelas;
    public    $namaMinuman;

    function isi ($vol){
        $this->volume = $vol;
    }
    
    }
    class Minuman extends Dispenser{
        public $dana;
        function __construct($nama_minuman,$volumegelas,$hargapergelas){
            $this->namaMinuman = $nama_minuman;
            $this->volumegelas = $volumegelas;
            $this->hargasegelas = $hargapergelas;
        }

        function volsetelahdiambil(){
            $this->volume = $this->volume - $this->volumegelas;
            return $this->volume;
        }
        function transaksi($dana){
            $this->dana = $dana;
            return $this->dana - $this->hargasegelas;

        }
        function cetak(){
            echo 'Dana : '. $this->dana . "<br>";
            echo 'volume dispenser: ' .$this->volume.' ml<br>';
            echo 'Nama Minuman : '. $this->namaMinuman.'<br>';
            echo 'harga per gelas : '.$this->hargasegelas.'<br>';
            echo '--------------------------------- <br>';
            echo 'Dana Setelah membeli minuman : ' .$this->transaksi($this->dana).'<br>';
            echo 'volume dispenser setelah diambil : '.$this->volsetelahdiambil().' ml <br>';
        
        }
    }




//object
$object = new Minuman("Teh manis",250, 2000);
$object->transaksi(7000);
$object->isi(6000);
$object->cetak();



