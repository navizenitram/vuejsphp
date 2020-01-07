<?php
//This should be an API REST
include '../bootstrap.php';
//TODO: Checks de seguridad
//TODO: Recoger los datos con alguna clase que gestione las Request
$employeeRepository = new \Model\Employees\EmployeesRepositoryMongoDB(COMPANY_ID);
$data = \Services\Employees\GetEmployee::get($employeeRepository, $_GET['employeeId']);

header('Content-Type: application/json');
http_response_code(200);
echo json_encode(['data'=>$data]);

