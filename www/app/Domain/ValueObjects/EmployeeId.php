<?php


namespace Domain\ValueObjects;


class EmployeeId extends Uuid
{
    public function __construct(string $value)
    {
        $this->guardEmployeeId($value);
        parent::__construct($value);
    }

    private function guardEmployeeId(string $value)
    {
        try {
            Uuid::from($value);
        } catch (\Exception $e) {
            throw new \Exception(sprintf('Employee Id format invalid <%s>', $value));
        }
    }


}