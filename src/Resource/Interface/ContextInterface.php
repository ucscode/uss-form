<?php

namespace Ucscode\UssForm\Resource\Interface;

use Ucscode\UssElement\UssElement;

interface ContextInterface
{
    public function setAttribute(string $name, ?string $value, bool $append): self;
    public function getAttribute(string $name): ?string;
    public function removeAttribute(string $name, ?string $value): self;
    public function hasAttribute(string $name): bool;
    public function setDOMHidden(bool $value): self;
    public function isDOMHidden(): bool;
    public function setValue(string|UssElement|null $value): self;
    public function getValue(): null|UssElement|string;
    public function hasValue(): bool;
    public function setFixed(bool $status): self;
    public function isFixed(): bool;
    public function addClass(?string $context): self;
    public function removeClass(?string $context): self;
    public function getElement(): UssElement;
    public function export(): string;
}