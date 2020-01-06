<?php


namespace Services\Employees;


use Model\Employees\EmployeesRepositoryMongoDB;
use Model\ValueObjects\Uuid;

final class DeleteEmployee
{
    private $companyId;

    public function __construct(string $companyId)
    {
        $this->companyId = Uuid::from($companyId)->value();
    }

    public function __invoke(): bool
    {
        $employeesRepository = new EmployeesRepositoryMongoDB($this->companyId);
        return $employeesRepository->deleteEmployee(Uuid::from('3c0a8429-d53a-4218-a831-ea89bd2bc001')->value());
    }
}