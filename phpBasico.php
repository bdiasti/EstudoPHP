<?php

$title = "bernardo";

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

?>
