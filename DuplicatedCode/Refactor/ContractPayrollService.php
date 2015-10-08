<?php 

class ContractPayrollService extends AbstractPayrollService
{
    public function salary(Employee $employee)
    {
        return $employee->salary->base() - $this->loanService($employee);
    }
}