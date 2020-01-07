<?php


namespace Services\Employees;


use Model\Employees\EmployeesRepository;
use Model\ValueObjects\Uuid;

final class DeleteEmployee
{
    private $employeesRepository;
    private $employeeId;

    public function __construct(EmployeesRepository $employeesRepository, string $employeeId)
    {
        $this->employeesRepository = $employeesRepository;
        $this->employeeId = Uuid::from($employeeId)->value();
    }

    public function __invoke(): bool
    {
        return $this->employeesRepository->deleteEmployee($this->employeeId);
    }
}