<?php
	$tabungan = 150000;
	$bunga = 12.5;
	$saldo = $tabungan + (($tabungan*$bunga)/100);

	echo "Tabungan Awal = Rp. $tabungan<br>
	Bunga Setahun = $bunga%<br>
	Total Tabungan Setahun = ? <br>
	Jawaban : Rp. $saldo";
?>

