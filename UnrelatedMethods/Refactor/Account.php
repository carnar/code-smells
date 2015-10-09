<?php 
class Account
{
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function debit($amount)
    {
        $this->balance -= $amount;
    }

    public function credit($amount)
    {
        $this->balance += $amount;
    }
}