<?php

namespace Ucscode\UssForm\Resource\Interface;

interface ElementContextInterface
{
    public function setFixed(bool $status): self;
    public function isFixed(): bool;
}