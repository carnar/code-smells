<?php 

class ContractPayrollService
{
    public function salary(Employee $employee)
    {
        return $employee->salary->base() - $this->loanService($employee);
    }

    public function payroll()
    {
        return $this->repository->getAll();
    }

    public function fire(Employee $employee)
    {
        return $this->fireService->fire($employee);
    }
}