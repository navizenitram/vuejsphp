<?php
namespace Model\Employees;

use Model\ValueObjects\Employee;
use ValueObject\Uuid;

interface EmployeesRepository
{
     public function addEmployee(Employee $employee): bool;
     public function getEmployee(string $employeeId): array;
     public function deleteEmployee(string $employeeId): bool;
     public function updateEmployee(Employee $employee): bool;
     public function getEmployeesList(int $page=1):array;

}