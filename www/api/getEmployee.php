<?php
include '../bootstrap.php';
//TODO: Checks de seguridad
//TODO: Recoger los datos con alguna clase que gestione las Request
$data = Services\Employees\GetEmployee::get(COMPANY_ID, $_GET['employeeId']);

header('Content-Type: application/json');
http_response_code(200);
echo json_encode(['data'=>$data]);

