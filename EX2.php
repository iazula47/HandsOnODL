<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hands On Activity - ODL</title>
</head>
<body>
<h4>PHP Array Exercise 2 - Cities</h4>

<?php

$cities = array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London");
$list = implode(', ', $cities);

for ($i=0; $i < 94; $i++) { 
	print($list[$i]);
}


if( count( $cities) > 0) {
	sort($cities);
    echo '<ul>';
    echo '<li>' . implode( '</li><li>', $cities) . '</li>';
    echo '</ul>';
    echo "\n";
}

array_push($cities, "Los Angeles","Calcutta","Osaka","Beijing");

if( count( $cities) > 0) {
	sort($cities);
    echo '<ul>';
    echo '<li>' . implode( '</li><li>', $cities) . '</li>';
    echo '</ul>';
    echo "\n";
}


?>

</body>
</html>