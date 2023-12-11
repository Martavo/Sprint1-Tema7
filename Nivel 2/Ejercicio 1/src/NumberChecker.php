<?php
class NumberChecker
{
    public function __construct(private int $num){
    }

    public function isEven(): bool{
        return $this->num % 2 == 0;
    }

    public function isPositive(): bool{
        return $this->num > 0;
    }
}
?>