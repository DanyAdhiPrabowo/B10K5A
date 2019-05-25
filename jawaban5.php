<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

function ganti_kata($kata, $awal, $ganti)
{
	$str 	= str_split($kata);
	$jum	= count($str);
	$baru 	= [];
	for ($i=0; $i <$jum ; $i++) { 
		if($str[$i]==$awal)	{
			array_push($baru,$ganti);
		}else{
			array_push($baru,$str[$i]);
		};
	}
	return implode($baru,'');
}

var_dump(ganti_kata('purwakarta','a','o'));



?>
</body>
</html>