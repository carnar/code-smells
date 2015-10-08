<?php 
abstract class PayrollService
{
    abstract public function salary(Employee $employee);

    public function payroll()
    {
        return $this->repository->getAll();
    }

    public function fire(Employee $employee)
    {
        return $this->fireService->fire($employee);
    }
}