<?php
include '../bootstrap.php';
$employeeRepository = new \Model\Employees\EmployeesRepositoryMongoDB(COMPANY_ID);
$page = 1;
$data = \Services\Employees\GetEmployeesList::get($employeeRepository, $page);

header('Content-Type: application/json');
http_response_code(200);
echo json_encode(['data'=>$data]);

