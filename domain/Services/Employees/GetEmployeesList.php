<?php


namespace Services\Employees;

use Model\Employees\EmployeesRepositoryMongoDB;
use Model\ValueObjects\Uuid;

final class GetEmployeesList
{
    private $companyId;
    private $page;

    private function __construct(string $companyId, int $page)
    {
        $this->companyId = Uuid::from($companyId)->value();
        $this->page = $page;
    }

    public function __invoke(): array
    {
        $employeesRepository = new EmployeesRepositoryMongoDB($this->companyId);
        return $employeesRepository->getEmployeesList($this->page);
    }

    public static function get(string $companyId, int $page): array
    {
        $getEmployeesList = new self($companyId, $page);
        return $getEmployeesList();
    }
}