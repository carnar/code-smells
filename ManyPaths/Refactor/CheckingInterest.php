<?php 

class CheckingInterest implements BankInterestInterface 
{
    public function getRate()
    {
        return 0.01;
    }
}