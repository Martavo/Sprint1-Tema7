<?php
class NumberChecker  {

	public function __construct(private int $number){}

	public function isEven(): bool { //metodo para calcular si es par
		return $this->number%2 == 0;
	}
	public function isPositive(): bool { //metodo para saber si es positivo
		return $this->number > 0;
	}

}
?>