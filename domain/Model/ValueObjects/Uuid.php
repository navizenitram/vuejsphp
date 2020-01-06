<?php
namespace Model\ValueObjects;
//TODO: Encapsular Ramsey o similar. Clase dummy.
class Uuid extends StringValueObject
{
    public static function from(string $value)
    {
        return new static($value);
    }

}
