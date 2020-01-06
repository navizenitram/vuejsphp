<?php
include '../../../../bootstrap.php';
use Services\Employees\GetEmployee;
use PHPUnit\Framework\TestCase;

class GetEmployeeTest extends TestCase
{
    public function testGetEmployeeFound()
    {
        $data = GetEmployee::get(COMPANY_ID, '2a57bdf5-edf8-4276-a50f-f4370cf82bbd');
        $this->assertIsArray($data);
    }

    public function testGetEmployeeNotFound()
    {
        $data = GetEmployee::get(COMPANY_ID, '3a57bdf5-edf8-4276-a50f-f4370cf82bbd');
        $this->assertIsArray($data);
    }
}