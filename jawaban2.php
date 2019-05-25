<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

function betweenDays($date1, $date2){
	$awal 	= new DateTime($date1);
	$akhir 	= new DateTime($date2);
	$akhir 	= $akhir->modify('+1 day');
	$range  = new DateInterval('P1D');

	$period = new DatePeriod($awal, $range, $akhir);
	foreach ($period as $p) {
		echo $p->format('Y-m-d').', ';
	}
}

betweenDays('2019-11-01','2019-11-05');
?>


</body>
</html>