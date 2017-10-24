<?php

class kelinci {
	public $telinga = "panjang";
	public $jalan = "melompat";
}
$kelinci1 = new kelinci;
echo "Kelinciku mempunyai telinga : ".$kelinci1->telinga. '<br>';
echo "Dan berjalan dengan cara : ".$kelinci1->jalan; 
echo "<br>". "<br>";

	class dogi{
	public $suara = "guk guk guk";
	public $kaki = 4;
}
$dogi1 = new dogi;
echo "Aku mempunyai dogi ia bersuara : ".$dogi1->suara. '<br>';
echo "Dan berjalan dengan  : ".$dogi1->kaki. 'kakinya'; 
echo "<br>". "<br>";

	class ayam{
	public $suara = "kukuruyuk";
	public $kaki = 2;
}
$ayam1 = new ayam;
echo "Saya mempunyai empat ayam ia bersuara : ".$ayam1->suara. '<br>';
echo "Dan berjalan dengan  : ".$ayam1->kaki. 'kakinya'; 
echo "<br>". "<br>";

class kuda{
	public $suara = "iiihhaaa";
	public $kaki = 4;
}
$kuda1 = new kuda;
echo "Saya mempunyai kuda ia bersuara : ".$kuda1->suara. '<br>';
echo "Dan berjalan dengan  : ".$kuda1->kaki. 'kakinya'; 
echo "<br>". "<br>";

class buaya{
	public $makan = "daging";
	public $jalan= "merangkak";
}
$buaya1 = new buaya;
echo "Saya memelihara buaya ia bersuara : ".$buaya1->makan. '<br>';
echo "Dan berjalan dengan  : " .$buaya1->jalan.'dengan kakinya yang pendek'; 
echo "<br>". "<br>";
?>