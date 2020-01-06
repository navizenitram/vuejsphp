<?php
include '../bootstrap.php';
$data = Services\Employees\GetEmployeesList::get(COMPANY_ID, 1);

header('Content-Type: application/json');
http_response_code(200);
echo json_encode(['data'=>$data]);

