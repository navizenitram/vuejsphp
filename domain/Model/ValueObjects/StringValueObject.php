<?php
namespace Model\ValueObjects;

abstract class StringValueObject implements ValueObject
{
    private $value;

    protected function __construct(string $value)
    {
        $this->value = $value;
    }
    public function value(): string
    {
        return $this->value;
    }
    public function equalTo(StringValueObject $other): bool
    {
        return \get_class($other) === static::class && $this->value === $other->value;
    }
    final public function jsonSerialize(): string
    {
        return $this->value;
    }
    public static function from(string $value)
    {
        return new static($value);
    }
}