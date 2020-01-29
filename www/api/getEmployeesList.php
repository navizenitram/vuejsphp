<?php
//This should be an API RESTx
include '../bootstrap.php';
use Structure\Employees\EmployeesRepositoryInMemory;
use AppServices\Employees\GetEmployeesList;
$employeeRepository = new EmployeesRepositoryInMemory();
$data = new GetEmployeesList($employeeRepository, 10, 0);
header('Content-Type: application/json');
http_response_code(200);
echo json_encode(['data'=>$data()]);

