<?php

namespace Ucscode\UssForm\Resource\Interface;

use Ucscode\UssElement\UssElement;

interface WidgetContextInterface extends ContextInterface
{
    public function setDOMHidden(bool $value): self;
    public function setValue(string|UssElement|null $value): self;
    public function setButtonContent(?string $content): self;
    public function isCheckable(): bool;
    public function isButton(): bool;
    public function isSelective(): bool;
    public function setChecked(bool $checked): self;
    public function isChecked(): ?bool;
    public function setDisabled(bool $status): self;
    public function isDisabled(): bool;
    public function setReadonly(bool $status): self;
    public function isReadonly(): bool;
    public function setRequired(bool $status): self;
    public function isRequired(): bool;
    public function setHidden(bool $hidden): self;
    public function isHidden(): bool;
    public function setOptions(array $options): self;
    public function setOption(string $key, ?string $value): self;
    public function removeOption(string $key): self;
    public function getOptions(): array;
    public function hasOption(string $key): bool;
    public function getOptionElement(?string $key): ?UssElement;
    public function sortOptions(callable|bool $callback = true): void;
}