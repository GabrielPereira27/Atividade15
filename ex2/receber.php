<?php 
	$num1 = $_POST['txt_num1'];
	$num2 = $_POST['txt_num2'];

	$soma = $num1 + $num2;
	$sub = $num1 - $num2;
	$mult = $num1 * $num2;
	$div = $num1 / $num2;
	echo "A soma dos números é " .$soma. "<br><br>"; 
	echo "A subtração dos números é " .$sub. "<br><br>";
	echo "A multiplicação dos números é " .$mult. "<br><br>";
	echo "A divisão dos números é " .$div;
?>