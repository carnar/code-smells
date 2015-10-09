<?php 

class Account
{
    public function addYearlyInterest($balance, BankInterestInteface $interest)
    {
        $rate = $interest->getRate();
        
        return $balance + ($balance * $rate);
    }
}