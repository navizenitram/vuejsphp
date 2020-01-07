<?php


namespace Services\Employees;


use Model\Employees\EmployeesRepository;
use Model\Employees\EmployeesRepositoryMongoDB;
use Model\ValueObjects\Employee;
use Model\ValueObjects\Uuid;
use Structure\Employees\CloudRepository;

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