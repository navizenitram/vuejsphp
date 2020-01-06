<?php
namespace ValueObject;

class CollectionValueObject implements \Iterator, \Countable, ValueObject
{
    private array $items;

    protected function __construct(array $items)
    {
        $this->items = $items;
    }

    public function current()
    {
        return \current($this->items);
    }

    public function next()
    {
        \next($this->items);
    }

    public function key()
    {
        return \key($this->items);
    }

    public function valid()
    {
        return \array_key_exists($this->key(), $this->items);
    }

    public function rewind()
    {
        \reset($this->items);
    }

    public function count()
    {
        return \count($this->items);
    }

    public function walk(callable $func)
    {
        \array_walk($this->items, $func);
    }

    public function filter(callable $func)
    {
        return new static(\array_values(\array_filter($this->items, $func)));
    }

    public function map(callable $func): CollectionValueObject
    {
        return new self(\array_map($func, $this->items));
    }

    public function reduce(callable $func, $initial)
    {
        return \array_reduce($this->items, $func, $initial);
    }

    public function isEmpty(): bool
    {
        return $this->count() === 0;
    }

    public function equalTo(CollectionValueObject $other): bool
    {
        return \get_class($other) === static::class && $this->items == $other->items;
    }

    final public function jsonSerialize(): string
    {
        return json_encode($this->items);
    }

    final public function __get($name)
    {
        if (array_key_exists($name, $this->items)) {
            return $this->items[$name];
        }
    }

    final public function value() {
        return $this->items;
    }

    protected function addItem($item): self
    {
        $items = $this->items;
        $items[] = $item;

        return new static($items);
    }

    protected function removeItem($item): self
    {
        return $this->filter(
            function ($current) use ($item) {
                return $current !== $item;
            }
        );
    }

    public static function from(array $items)
    {
        return new static($items);
    }
}
