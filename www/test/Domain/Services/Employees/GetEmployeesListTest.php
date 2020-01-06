<?php
include '../../../../bootstrap.php';
use Services\Employees\GetEmployeesList;
use PHPUnit\Framework\TestCase;

class GetEmployeesListTest extends TestCase
{
    public function testGetList()
    {
        $data = GetEmployeesList::get(COMPANY_ID, 1);
        $this->assertIsArray($data);
    }
}
