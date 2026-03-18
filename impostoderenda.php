<?php 

$salarioBruto = 2400;

if($salarioBruto < 0) {
	echo "valor invalido! <br/>";
}else if($salarioBruto<=2428.80){
	$porcentagem = 0;
	$salarioLiquido = $salarioBruto - ($salarioBruto * $porcentagem/ 100);
}else if($salarioBruto<=2826.65){
	$porcentagem = 7.5;
	$salarioLiquido = $salarioBruto - ($salarioBruto * $porcentagem/ 100);
}else if($salarioBruto<=3751.05){
	$porcentagem = 15;
	$salarioLiquido = $salarioBruto - ($salarioBruto * $porcentagem/ 100);
}else if($salsarioBruto<=4664.68){
	$porcentagem = 22.5;
	$salarioLiquido = $salarioBruto - ($salarioBruto * $porcentagem/ 100);
}else{
	$porcentagem = 27.5;
	$salarioLiquido = $salarioBruto - ($salarioBruto * $porcentagem/ 100);
};

$valorDesc = ($salarioBruto * $porcentagem/ 100);

echo "Salario bruto: R$$salarioBruto <br/>";
echo "Porcentagem de desconto: $porcentagem% <br/>";
echo "Valor do desconto: R$$valorDesc <br/>";
echo "Salario Liquido: R$$salarioLiquido";


 ?>