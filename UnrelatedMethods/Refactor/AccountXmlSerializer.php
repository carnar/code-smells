<?php 
class AccountXmlSerializer
{
    public function toXML(Account $account)
    {
        return "<account><number>{$this->account->getAccountNumber()}</number>" 
                . "<balance>{$this->account->getBalance()}</balance></account>";
    }
}