<?php


namespace AppServices\Employees;


use Structure\Employees\EmployeesRepository;
use Domain\ValueObjects\Employee;
use Structure\Employees\Cloud\CloudRepository;

final class AddEmployee
{
    private $cloudRepository;
    private $employeesRepository;

    public function __construct(CloudRepository $cloudRepository, EmployeesRepository $employeesRepository)
    {
        $this->cloudRepository = $cloudRepository;
        $this->employeesRepository = $employeesRepository;

    }

    public function __invoke(Employee $employee): bool
    {
        if ($this->employeesRepository->addEmployee($employee)) {
            $this->cloudRepository->saveFile($employee->avatarSource);
        }
    }




}