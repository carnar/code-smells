<?php 

class SavingsInterest implements BankInterestInterface 
{
    public function getRate()
    {
        return 0.03;
    }
}