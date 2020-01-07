<?php


namespace Services\Employees;

use Model\Employees\EmployeesRepository;
use Model\ValueObjects\Uuid;

final class GetEmployee
{

    private $employeesRepository;
    private $employeeId;

    public function __construct(EmployeesRepository $employeesRepository, string $employeeId)
    {
        $this->employeesRepository = $employeesRepository;
        $this->employeeId = Uuid::from($employeeId)->value();
    }

    public function __invoke(): array
    {
        return $this->employeesRepository->getEmployee($this->employeeId);
    }

    public static function get(EmployeesRepository $employeesRepository, string $employeeId): array
    {
        $getEmployee = new self($employeesRepository, $employeeId);
        return $getEmployee();
    }
}