<?php 

class ProductSale
{
    public function charge($date, $quantity)
    {
        if ($date->lt($this->season->summerStart) || $date->gt($this->season->summerEnd)) {
            $charge = $quantity * $this->winterRate + $this->winterServiceCharge;
        } else {
            $charge = $quantity * $this->summerRate;
        } 
        return $charge;
    }
}