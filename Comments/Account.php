<?php 
class Account
{
    /**
     * @author carnar <cnarez@clasificados.com>
     */
    public function debit($amount) 
    {    
        // check amount does not exceed max allowed
        if ($amount > 1000) {
            throw new IllegalArgumentException("Maximum debit amount exceeded");
        }

        // deduct amount from balance
        $this->balance -= $amount;
        
        // record transaction
        $transaction = $this->transactions->add(new Transaction(true, $amount));
        
        // update debit transaction time
        $interval = date_diff(date('Y-m-d H:i:s'), $transaction->startedAt());
        $this->timeTransaction = $interval->format('s');
    }
}