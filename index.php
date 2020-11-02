<?php

trait Hewan {

	public $nama,
		   $darah,
	       $jumlahKaki,
	       $keahlian;


	public function __construct($nama, $jumlahKaki, $keahlian, $attackPower = 0, $defencePower=0, $darah = 0){
		$this->nama = $nama;
		$this->jumlahKaki = $jumlahKaki;
		$this->keahlian = $keahlian;
		$this->attackPower = $attackPower;
		$this->defencePower = $defencePower;
		$this->darah = $darah;
		
	}

	public function aktrasi(){
		 return "$this->nama sedang $this->keahlian";
	}
}

trait Fight {

	public $attackPower,
	       $defencePower;


	public function serang($lawan){
		$lawan = "{$lawan->nama} sedang menyerang {$lawan->nama}";
		return $lawan;
	}


	public function diserang(){
		return "$this->nama sedang diserang";
	}
}

class Elang {
	use Hewan, Fight;

	public function getInfoHewan(){
		$this->$nama = 'Elang1';
		$this->jumlahKaki = 2;
		$this->$keahlian = 'terbang tinggi';
		$this->$attackPower = 10;
		$this->$defencePower = 5;
		$this->$darah = 50;
	}
}

class Harimau {
	use Hewan, Fight;
}

$elang1 = new Elang("Elang1", "2" ,"terbang tinggi", 10 , 5 , 50 );

$harimau1 = new Harimau("Harimau1", "4" , "lari cepat", 7, 8, 50 );

echo $harimau1->aktrasi();
echo '<br>';
echo $elang1->aktrasi();
echo '<br>';
echo '<br>';
echo $elang1->serang($harimau1);
echo '<br>';
