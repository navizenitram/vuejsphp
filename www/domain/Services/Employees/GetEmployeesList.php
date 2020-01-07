<?php


namespace Services\Employees;

use Model\Employees\EmployeesRepository;
use Model\Employees\EmployeesRepositoryMongoDB;
use Model\ValueObjects\Uuid;

final class GetEmployeesList
{
    private $employeesRepository;
    private $page;

    private function __construct(EmployeesRepository $employeesRepository, int $page)
    {
        $this->employeesRepository = $employeesRepository;
        $this->page = $page;
    }

    public function __invoke(): array
    {
        return $this->employeesRepository->getEmployeesList($this->page);
    }

    public static function get(EmployeesRepository $employeesRepository, int $page): array
    {
        $getEmployeesList = new self($employeesRepository, $page);
        return $getEmployeesList();
    }
}