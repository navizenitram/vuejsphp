<?php


namespace AppServices\Employees;


use Structure\Employees\EmployeesRepository;
use Domain\ValueObjects\EmployeeId;


final class DeleteEmployee
{
    private $employeesRepository;
    private $employeeId;

    public function __construct(EmployeesRepository $employeesRepository, String $employeeId)
    {
        $this->employeesRepository = $employeesRepository;
        $this->employeeId = EmployeeId::from($employeeId);
    }

    public function __invoke(): bool
    {
        return $this->employeesRepository->deleteEmployee($this->employeeId);
    }
}