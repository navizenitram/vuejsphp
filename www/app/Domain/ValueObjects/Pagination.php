<?php


namespace Domain\ValueObjects;


class Pagination implements ValueObject
{
    private $limit;
    private $ofset;

    /**
     * @return mixed
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return mixed
     */
    public function getOfset()
    {
        return $this->ofset;
    }

    /**
     * Pagination constructor.
     * @param int $limit
     * @param int $ofset
     */
    public function __construct(int $limit, int $ofset)
    {
        $this->limit = $limit;
        $this->ofset = $ofset;
    }


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}