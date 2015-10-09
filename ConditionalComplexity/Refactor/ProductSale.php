<?php 

class ProductSale
{
    public function charge($date, $quantity)
    {
        if ($this->notSummer()) {
            $charge = $this->winterCharge($quantity);
        } else {
            $charge = $this->summerCharge($quantity)
        } 
        return $charge;
    }

    private function notSummer()
    {
        return $date->lt($this->season->summerStart) || $date->gt($this->season->summerEnd);
    }

    private function winterCharge($quantity)
    {
        return $quantity * $this->winterRate + $this->winterServiceCharge
    }

    private function summerCharge($quantity)
    {
        return $quantity * $this->summerRate;
    }
}