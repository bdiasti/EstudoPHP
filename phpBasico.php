<?php

$title = "bernardo1";

$age = 100;

echo ($title);

// Versão simplificada

$concate = "bernardo" . "dias";

?>

<h1><?= $title ?></h1>
<h3> <?= $concate ?></h3>
<h3> <?= 90 * 6 ?></h3>

<?php

$value = 10;

if($value == 10 ){
	echo "resultado igual a 10";

}elseif($value < 10){
	echo "resultado menor 10";

}else{
	echo "outro resultado";

}
?>


<?php

for($i=0; $i < 10; $i++){
	echo $i;

}

$i2 = 0;
while($i2 < 10){

	echo $i2;
	$i2++;
}

$x[0][0] = "Valor no array";
echo $x[0][0];

//Criação de array
$y = array("cat","dog");
$z = array("num1"=>"cat", "num2"=>"dog");
print_r($z);
var_dump($z);
echo $z["num1"];

foreach($y as $x){
	echo " " . $x;
}

foreach($z as $key=>$value){
	echo $key;
}


//contantes
define("CONSTANTE1", 0);

?>


<?php foreach($y as $h): ?>

<p> <?= $h ?> </p>

<?php endforeach; ?>


<?php
	
function teste($valor){
	return $valor;
}

echo teste(1);

setcookie("name", "bernardo");
echo $_COOKIE['name'];


session_start();
$_SESSION["teste"] = true;
unset($_SESSION["teste"]);


//Tratando requests
echo $_POST["name"];
echo $_GET["teste"];
echo $REQUEST["NOME"]; //Trata tanto GET e POST

?>


<?php

class Pessoa{

	private $id;

//Construtor
 function __construct(){

 }

 function getId(){
 	return $this->$id;
 }

}

$pessoa = new Pessoa();

?>