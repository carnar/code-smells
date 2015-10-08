<?php 

class RegularPayrollService extends AbstractPayrollService
{
    public function salary(Employee $employee)
    {
        return $employee->salary->base() - 
                $this->loanService($employee) -
                $this->igssService($employee) - 
                $this->isrService($employee);
    }
}