<?php 
class Account
{
    public function debit($amount) 
    {    
        $this->checkExceedAmount();

        $this->deductAmount($amount);
        
        $transaction = $this->recordTransaction($amount);
        
        $this->updateTimeTransaction($transaction);
    }

    private function checkExceedAmount($amount)
    {
        if ($amount > 1000) {
            throw new IllegalArgumentException("Maximum debit amount exceeded");
        }
    }

    private function deductAmount($amount)
    {
        $this->balance -= $amount;
    }

    private function recordTransaction($amount)
    {
        return $this->transactions->add(new Transaction(true, $amount));
    }

    private function updateTimeTransaction($transaction)
    {
        $interval = date_diff(date('Y-m-d H:i:s'), $transaction->startedAt());
        $this->timeTransaction = $interval->format('s');
    }
}