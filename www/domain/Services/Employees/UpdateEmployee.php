<?php


namespace Services\Employees;


use Model\Employees\EmployeesRepository;
use Model\Employees\EmployeesRepositoryMongoDB;
use Model\ValueObjects\Employee;
use Model\ValueObjects\Uuid;

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