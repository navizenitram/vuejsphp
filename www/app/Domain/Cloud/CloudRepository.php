<?php
namespace Domain\Cloud;

use Domain\ValueObjects\FileSource;

interface CloudRepository
{
    public function saveFile(FileSource $sourceId): bool;
    public function getFile(FileSource $sourceId);
}