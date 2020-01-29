<?php

namespace Structure\Employees;


use Domain\Employees\EmployeesRepository;
use Domain\ValueObjects\Employee;
use Domain\ValueObjects\EmployeeId;
use Domain\ValueObjects\Pagination;

class EmployeesRepositoryInMemory implements EmployeesRepository
{

    private $dataRepository = [];


    public function __construct()
    {
        $this->dataRepository = [
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
            ]
        ];
    }

    public function getEmployee(EmployeeId $employeeId): array
    {
        //TODO: La busqueda debería ser compuesta por $employeeId y $companyId para evitar accesos indeseados.

        if(isset($this->dataRepository[$employeeId->value()])) {
            return $this->dataRepository[$employeeId->value()];
        } else {
            return [];
        }
    }

    public function getEmployeesList(Pagination $pagination):array
    {
        //TODO: La busqueda debería ser sobre datos de la empresa
        return $this->dataRepository;
    }

    public function deleteEmployee(EmployeeId $employeeId): bool
    {
        if(isset($this->dataRepository[$employeeId->value()])) {
            unset ($this->dataRepository[$employeeId->value()]);
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
        // TODO: Implement addEmployee() method.
    }
}