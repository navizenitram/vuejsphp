<?php
namespace Domain\ValueObjects;
use  Ramsey\Uuid\Uuid as RamseyUuid;
class Uuid extends StringValueObject
{
    public static function from(string $value)
    {
        return new static(RamseyUuid::fromString($value)->toString());

    }

    public static function v4()
    {
        return new static(RamseyUuid::uuid4()->toString());
    }

}
