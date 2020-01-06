<?php

namespace Model\Employees;

use Model\ValueObject\Uuid;
use Model\Employees\EmployeesRepository;
use Model\ValueObjects\Employee;

class EmployeesRepositoryMongoDB implements EmployeesRepository
{
    private $idCompany;

    //Datos Fake solo para DEMO
    private $dataRepository =  [
        '2a57bdf5-edf8-4276-a50f-f4370cf82bbd' => [
                'name'=> "Ivan",
                'surname'=> "Martínez Castro",
                'email'=> "ivan.martinezca@gmail.com",
                'position'=> "Fullstack developer",
                'office'=> "Barcelona",
                'salary'=> "45000",
                'workingHours'=> "40",
                'avatar'=> "http://demos.themes.guide/bodeo/assets/images/users/m103.jpg"
            ],
        '3c0a8429-d53a-4218-a831-ea89bd2bc001' => [
                'name'=> "Daniel",
                'surname'=> "Pérez Carrasco",
                'email'=> "dperez@gmail.com",
                'position'=> "Junior Developer",
                'office'=> "Barcelona",
                'salary'=> "30000",
                'workingHours'=> "40",
                'avatar'=> "http://demos.themes.guide/bodeo/assets/images/users/m102.jpg"
            ],

        ];


    public function __construct(string $idCompany)
    {
        $this->idCompany = $idCompany;
        //TODO: Instanciar MongoDB driver constructor
    }

    public function getEmployee(string $employeeId): array
    {
        //TODO: La busqueda debería ser compuesta por $employeeId y $companyId para evitar accesos indeseados.

        if(isset($this->dataRepository[$employeeId])) {
            return $this->dataRepository[$employeeId];
        } else {
            return [];
        }
    }

    public function getEmployeesList(int $page=1):array
    {
        //TODO: La busqueda debería ser sobre datos de la empresa
        return $this->dataRepository;
    }

    public function deleteEmployee(string $employeeId): bool
    {
        if(isset($this->dataRepository[$employeeId])) {
            unset ($this->dataRepository[$employeeId]);
            return true;
        } else {
            return false;
        }
    }

    public function updateEmployee(Employee $employee): bool
    {
        if(isset($this->dataRepository[$employee->id])) {
            $this->dataRepository[$employee->id] = $employee->value();
            return true;
        } else {
            return false;
        }
    }

    public function addEmployee(Employee $employee): bool
    {
        if(isset($this->dataRepository[$employee->id])) {
            return false;
        } else {
            $this->dataRepository[$employee->id] = $employee->value();
            return true;
        }
    }


}