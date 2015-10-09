<?php 

class Account
{
    public function addYearlyInterest($balance)
    {
        switch ($this->accountType) {
            case 'checking':
                $rate = $this->getCheckingInterestRate();
                break;
            
            case 'savings':
                $rate = $this->getSavingsInterestRate();
                break;
                
            // other types of accounts 
        }
        return $balance + ($balance * $rate);
    }
}