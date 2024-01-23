<?php

namespace Ucscode\UssForm\Form\Manifest;

use Ucscode\UssElement\UssElement;
use Ucscode\UssForm\Collection\Collection;
use Ucscode\UssForm\Field\Field;
use Ucscode\UssForm\Resource\Facade\Position;
use Ucscode\UssForm\Resource\Service\Pedigree\FieldPedigree;

interface FormInterface
{
    public function addCollection(string $name, Collection $collection): self;
    public function getCollection(string $name): ?Collection;
    public function removeCollection(string|Collection $context): ?Collection;
    public function hasCollection(string|Collection $context): bool;
    public function getCollectionName(Collection $collection): ?string;
    public function getCollections(): array;
    public function getElement(): UssElement;
    public function export(): string;
    public function setCollectionPosition(string|Collection $collection, Position $position, string|Collection $targetCollection): bool;
    public function populate(array $data): self;
    public function getFieldPedigree(string|Field $context): ?FieldPedigree;
}
