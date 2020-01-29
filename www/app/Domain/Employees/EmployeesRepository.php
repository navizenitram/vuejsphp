<?php
namespace Domain\Employees;

use Domain\ValueObjects\Employee;
use Domain\ValueObjects\EmployeeId;
use Domain\ValueObjects\Pagination;

interface EmployeesRepository
{
     public function addEmployee(Employee $employee): bool;
     public function getEmployee(EmployeeId $employeeId): array;
     public function deleteEmployee(EmployeeId $employeeId): bool;
     public function updateEmployee(Employee $employee): bool;
     public function getEmployeesList(Pagination $page):array;

     //TODO: Implementar patrón criteria

}