<?php


namespace Services\Employees;

use Model\Employees\EmployeesRepositoryMongoDB;
use Model\ValueObjects\Uuid;

final class GetEmployee
{
    private $companyId;
    private $employeeId;

    private function __construct(string $companyId, string $employeeId)
    {
        $this->companyId = Uuid::from($companyId)->value();
        $this->employeeId = Uuid::from($employeeId)->value();
    }

    public function __invoke(): array
    {
        $employeesRepository = new EmployeesRepositoryMongoDB($this->companyId);
        return $employeesRepository->getEmployee($this->employeeId);
    }

    public static function get(string $companyId, string $employeeId): array
    {
        $getEmployee = new self($companyId, $employeeId);
        return $getEmployee();
    }
}