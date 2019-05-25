<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 


function cetak_gambar($n){
	$t=$n/2+0.5;
	for ($baris=1; $baris <= $n; $baris++) { 
		for ($kolom=1; $kolom<=$n; $kolom++){
			if ($kolom==$t){
				echo '&nbsp*&nbsp';
			}elseif($baris==1){
				echo '&nbsp*&nbsp' ;
			}elseif($baris==$n){
				echo '&nbsp*&nbsp' ;
			}else{
				echo '&nbsp=&nbsp';
			}
		}
		echo '<br>';
	}
}

cetak_gambar(7);




?>
</body>
</html>