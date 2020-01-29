<?php
namespace Domain\ValueObjects;


use Domain\ValueObject\CollectionValueObject;

class Employee extends CollectionValueObject
{
    protected function __construct(array $items)
    {
        $this->guardEmployee($items);
        parent::__construct($items);
    }

    private function guardEmployee(array $items)
    {
        //TODO: Validar que el array cumple con las reglas del dominio o lanza excepción.
        if(empty($items)) {
            throw new \Exception("Empty employee array");
        }
    }
}