<?php 
	$num1 = $_POST['txt_num1'];
	$num2 = $_POST['txt_num2'];
	$operacao = $_POST['operacao'];



	function soma ($num1, $num2){
		$soma = 0;
		$soma = $num1 + $num2;
		return $soma;
	}

	function subtracao ($num1, $num2){
		$sub = 0;
		$sub = $num1 - $num2;
		return $sub;
	}

	function multiplicacao ($num1, $num2){
		$mult = 0;
		$mult = $num1 - $num2;
		return $mult;
	}

	function divisao ($num1, $num2){
		$div = 0;
		$div = $num1 - $num2;
		return $div;
	}

	if ($operacao == 'soma') {
		echo "A soma é " .soma($num1, $num2);
	}
	elseif ($operacao == 'sub') {
		echo "A subtracao é " .subtracao($num1, $num2);
	}
	elseif ($operacao == 'mult') {
		echo "A multiplicacao é  " .multiplicacao($num1, $num2);
	}
	elseif($operacao == 'div'){
		echo "A divisao é " .divisao($num1, $num2);
	}
?>