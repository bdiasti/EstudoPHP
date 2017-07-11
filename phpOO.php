<?php

//Exemplo funcional
$array = array(22,34,534,5343);

$filtro = function($numero){ return ($numero >500);};

echo var_dump(array_filter($array, $filtro));

//Padrões
// Uma classe por arquivo
// Atributo protected só é acessado pelas classes filhas.


class Product
{

	private $db;

	public function __construct($db)
	{

		$this->db = $db;	
	}

	public function list()
	{
		$query = "select * from users";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

}


$db = new \PDO("mysql:host=localhost;dbname=test","root","");
$product = new Product($db);

var_dump($product->list());



?>