<?php


namespace AppServices\Employees;

use Domain\Employees\EmployeesRepository;
use Domain\ValueObjects\EmployeeId;

final class GetEmployee
{

    private $employeesRepository;
    private $employeeId;

    public function __construct(EmployeesRepository $employeesRepository, String $employeeId)
    {
        $this->employeesRepository = $employeesRepository;
        $this->employeeId = EmployeeId::from($employeeId);
    }

    public function __invoke(): array
    {
        return $this->employeesRepository->getEmployee($this->employeeId);
    }


}