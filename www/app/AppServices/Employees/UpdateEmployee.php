<?php


namespace AppServices\Employees;


use Structure\Employees\EmployeesRepository;
use Structure\Employees\EmployeesRepositoryInMemory;
use Domain\ValueObjects\Employee;
use Domain\ValueObjects\Uuid;

final class UpdateEmployee
{
    private $employeesRepository;

    public function __construct(EmployeesRepository $employeesRepository)
    {
        $this->employeesRepository = $employeesRepository;
    }

    public function __invoke(Employee $employee): bool
    {
        return $this->employeesRepository->updateEmployee($employee);
    }
}