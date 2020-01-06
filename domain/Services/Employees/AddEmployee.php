<?php


namespace Services\Employees;


use Model\Employees\EmployeesRepositoryMongoDB;
use Model\ValueObjects\Employee;
use Model\ValueObjects\Uuid;
use Structure\Employees\CloudRepository;

final class AddEmployee
{
    private $companyId;
    private $cloudRepository;

    public function __construct(string $companyId, CloudRepository $cloudRepository)
    {
        $this->companyId = Uuid::from($companyId)->value();
        $this->cloudRepository = $cloudRepository;

    }

    public function __invoke(Employee $employee): bool
    {
        $employeesRepository = new EmployeesRepositoryMongoDB($this->companyId);
        if ($employeesRepository->addEmployee($employee)) {
            $this->cloudRepository->saveFile($employee->avatarSource);
        }
    }




}