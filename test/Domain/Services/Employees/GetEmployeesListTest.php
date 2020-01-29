<?php
include '../../../../bootstrap.php';
use AppServices\Employees\GetEmployeesList;
use PHPUnit\Framework\TestCase;

class GetEmployeesListTest extends TestCase
{
    public function testGetList()
    {
        //TODO: Mocking db class
        $dbRepo = new \Structure\Employees\EmployeesRepositoryInMemory();
        $data = GetEmployeesList::get($dbRepo, 1);
        $this->assertIsArray($data);
    }
}
