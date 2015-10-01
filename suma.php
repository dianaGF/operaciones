<?php
class Operaciones{
	public $num1,$num2,$resultado;

	public function asignaValores($num1, $num2){
		$this->num1 = $num1;
		$this->num2 = $num2;

	}

	private	function sumar($num1, $num2){
      $this->resultado = $this->num1 + $this->num2;
    }		

    public function imprimir($resultado){
    	$this->sumar();
   		return $this->resultado;
    }
}
$suma = new Operaciones;
$suma->asignaValores(2,3);
echo $suma->imprimir();
?>