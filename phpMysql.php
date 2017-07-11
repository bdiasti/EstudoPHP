<?php

//Para utilizar o mysql e necessario habilitar a extensao php.ini

//Conectando em uma base de dados.
$conexao = new mysqli("localhost","root","","test");
echo "Conexao realizada";

//Verificar se a conexao esta com erro
echo mysqli_connect_errno();

//Exec query - O desempenho do mysql1 é superior ao do PDO
$query = $conexao->query("SELECT * FROM USERS");

while ($data = $query->fetch_assoc()){
	echo $data['id'];
}


//Usando prepare - evita injeção de sql
$stmt = $conexao->stmt_init();
$stmt->prepare("SELECT ID FROM USERS WHERE ID = ?");
$stmt->bind_param("1");
$stmt->execute();
$stmt->bind_result($name);
$stmt->fetch();

$stmt = $conexao->stmt_init();
$stmt->prepare("INSERT INTO USERS VALUES (1)");
//$stmt->bind_param("1");
$stmt->execute();


echo $name;

?>