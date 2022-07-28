<?php
	$students =  array("Nick", "Sam", "Archy","Delvi");

	var_dump($students);
	echo "<br>";

	for($i = 0; $i < 4; $i++)
		echo $students[$i], "<br>";
	echo "<br>";;
	foreach ($students as $i)
		echo "Nama: ", $i, "<br>";
	
	sort($students);
	echo "<br>";;
	foreach ($students as $i)
		echo "Nama: ", $i, "<br>";

	$class = ["php I", "php II", "php III"];
	var_dump($class);
	echo "<br>";

	echo $class[2];
?>