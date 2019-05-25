<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
function count_vowels($string){
 	return preg_match_all('/[aiueo]/i', $string);
}
echo count_vowels('programmer');

?>
</body>
</html>