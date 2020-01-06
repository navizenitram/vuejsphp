<?php


namespace Services\Employees;


use Model\Employees\EmployeesRepositoryMongoDB;
use Model\ValueObjects\Employee;
use Model\ValueObjects\Uuid;

final class UpdateEmployee
{
    private $companyId;

    public function __construct(string $companyId)
    {
        $this->companyId = Uuid::from($companyId)->value();
    }

    public function __invoke(Employee $employee): bool
    {
        $employeesRepository = new EmployeesRepositoryMongoDB($this->companyId);
        return $employeesRepository->updateEmployee($employee);
    }
}