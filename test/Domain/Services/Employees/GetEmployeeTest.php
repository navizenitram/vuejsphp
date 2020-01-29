<?php
include '../../../../bootstrap.php';
use AppServices\Employees\GetEmployee;
use PHPUnit\Framework\TestCase;

class GetEmployeeTest extends TestCase
{
    public function testGetEmployeeFound()
    {
        //TODO: Mocking db class
        $dbRepo = new \Structure\Employees\EmployeesRepositoryInMemory();
        $data = GetEmployee::get($dbRepo, '2a57bdf5-edf8-4276-a50f-f4370cf82bbd');
        $this->assertIsArray($data);
    }

    public function testGetEmployeeNotFound()
    {
        //TODO: Mocking db class
        $dbRepo = new \Structure\Employees\EmployeesRepositoryInMemory();
        $data = GetEmployee::get($dbRepo, '3a57bdf5-edf8-4276-a50f-f4370cf82bbd');
        $this->assertIsArray($data);
    }
}