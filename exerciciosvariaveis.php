Aula de Variavéis 

Com o que foi passado até agora como você faria uma lista de ingredientes para um bolo

<?php
$ingredientes = ['acucar', 'farinha de trigo', 'leite', 'ovo', 'fermento em po'];

// Para mostrar apenas um igrediente dentro da lista utilizaremos:

echo $ingredientes[1];

// Numeração incia-se do 0

Para adicionarmos por exmplo  o bolo2, sem precisar copiar e colar ou escrever tudo novamente faremos assim:

<?php
$bolo1 = ['acucar', 'farinha de trigo', 'leite', 'ovo', 'fermento em po'];

$bolo2 = [
	'vasilha',
	'agua morna',
	...$bolo1,
	'corante',
	'chantily',

];

echo $bolo2[5];

Somente apartir do PHP 7.4

Questão 1, como fazer para que esse codigo abaixo funcione:

<?php
$lista = [
	'nome' => 'alberto',
	'idade' => '18',
	'atributos' => [
	'forca' => 60,
	'agilidade'  => 80,
	'destreza' => 50
]
	vida = 1000
	mana = 925
];

//resolução

<?php
$lista = [
	$nome = "Alberto",
	$idade = 18,
	$atributos = [
		$forca = 60,
		$agilidade  = 80,
		$destreza = 50
	],
	$vida = 1000,
	$mana = 925
];
echo "NOME: $nome <br/>";
echo "FORÇA: $forca <br/>";
echo "VIDA: $vida <br/>";
echo "MANA: $mana <br/>";
echo "DESTREZA: $destreza <br/>";
echo "AGILIDADE: $agilidade";
?>