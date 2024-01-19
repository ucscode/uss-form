<?php

namespace Ucscode\UssForm\Collection\Context;

use Ucscode\UssElement\UssElement;
use Ucscode\UssForm\Collection\Foundation\AbstractCollectionContext;

class FieldsetContext extends AbstractCollectionContext
{
    protected function created(): void
    {
        $this->element->setAttribute('class', 'collection-wrapper col-12');
        $this->element->setAttribute('data-foundation', 'collection');
        $this->element->setAttribute('data-el-context', 'fieldset');
    }

    public function setValue(string|UssElement|null $value): self
    {
        return $this;
    }

    public function setDOMHidden(bool $value): self
    {
        return $this;
    }
}
