<?php
include '../../../../bootstrap.php';
use Services\Employees\GetEmployeesList;
use PHPUnit\Framework\TestCase;

class GetEmployeesListTest extends TestCase
{
    public function testGetList()
    {
        //TODO: Mocking db class
        $dbRepo = new \Model\Employees\EmployeesRepositoryMongoDB(COMPANY_ID);
        $data = GetEmployeesList::get($dbRepo, 1);
        $this->assertIsArray($data);
    }
}
