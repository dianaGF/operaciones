<?php
class Operaciones{

	public $num1,$num2,$resultado;

	function __construct($num1,$num2){
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

	public	function sumar($num1, $num2){
		$this->resultado = $this->num1 + $this->num2;
    }		

    public	function restar($num1, $num2){
		$this->resultado = $this->num1 - $this->num2;
    }

    public	function multiplicar($num1, $num2){
		$this->resultado = $this->num1 * $this->num2;
    }

    public function imprimir(){
    	return $this->resultado;
    }
}

$suma = new Operaciones(5,3);
$suma->sumar();
echo "Suma: ".$suma->imprimir();
echo "<br>";

$resta = new Operaciones(5,3);
$resta->restar();
echo "Resta: ".$resta->imprimir();
echo "<br>";

$multiplica = new Operaciones(5,3);
$multiplica->multiplicar();
echo "Multiplica: ".$multiplica->imprimir();




?>