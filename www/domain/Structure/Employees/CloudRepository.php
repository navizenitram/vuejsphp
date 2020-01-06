<?php
namespace Structure\Employees;

interface CloudRepository
{
    public function saveFile(string $sourceId): bool;
    public function getFile(string $sourceId);
}