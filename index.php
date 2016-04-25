<!-- 1) CPF: valida_cpf($cpf) deve retornar true ou false se o CPF passado no parâmetro for válido ou inválido, respectivamente. -->

<?php

function valida_cpf($cpf)
{

	// $cpf = ereg_replace('[^0-9]', '', $cpf);
	//    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

	if (strlen($cpf) != 14)
	{
		echo "Digite CPF com pontos e hífen.";
		return false;
	}

	echo $cpf;
	$val0 = substr($cpf, 0, 1);
	$val1 = substr($cpf, 1, 1);
	$val2 = substr($cpf, 2, 1);
	$val3 = substr($cpf, 4, 1);
	$val4 = substr($cpf, 5, 1);
	$val5 = substr($cpf, 6, 1);
	$val6 = substr($cpf, 8, 1);
	$val7 = substr($cpf, 9, 1);
	$val8 = substr($cpf, 10, 1);
	$val9 = substr($cpf, 12, 1);
	$val10 = substr($cpf, 13, 1);
	if (($val0 == $val1) && ($val1 == $val2) && ($val2 == $val3) && ($val3 == $val4) && ($val4 == $val5) && ($val5 == $val6) && ($val6 == $val7) && ($val7 == $val8) && ($val8 == $val9) && ($val9 == $val10) && ($val10 == $val11))
	{
		return false;
	}
	else
	{
		$sum0 = $val0 * 10 + $val1 * 9 + $val2 * 8 + $val3 * 7 + $val4 * 6 + $val5 * 5 + $val6 * 4 + $val7 * 3 + $val8 * 2;
		$rest0 = ($sum0 * 10) % 11;
		if ($rest0 == 10)
		{
			$rest0 = 0;
		}

		$sum1 = $val0 * 11 + $val1 * 10 + $val2 * 9 + $val3 * 8 + $val4 * 7 + $val5 * 6 + $val6 * 5 + $val7 * 4 + $val8 * 3 + $val9 * 2;
		$rest1 = ($sum1 * 10) % 11;
		if ($rest1 == 10)
		{
			$rest1 = 0;
		}

		if (($rest0 == $val9) && ($rest1 == $val10))
		{
			echo "<br/>correto";
			return true;
		}
		else
		{
			echo "<br/>inválido";
			return false;
		}
	}
}

valida_cpf('391.649.118-02');
?>