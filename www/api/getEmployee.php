<?php
//This should be an API REST
include '../bootstrap.php';
use AppServices\Employees\GetEmployee;
use Structure\Employees\EmployeesRepositoryInMemory;
$data = new GetEmployee(new EmployeesRepositoryInMemory(), $_GET['employeeId']);

header('Content-Type: application/json');
http_response_code(200);
echo json_encode(['data'=>$data()]);

