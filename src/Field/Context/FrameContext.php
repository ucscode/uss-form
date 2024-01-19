<?php

namespace Ucscode\UssForm\Field\Context;

use Ucscode\UssElement\UssElement;
use Ucscode\UssForm\Field\Foundation\AbstractFieldContext;

class FrameContext extends AbstractFieldContext
{
    protected function created(): void
    {
        $this->addClass('frame col-12 my-1');
        $this->element->setAttribute('data-el-context', 'field.frame');
    }

    public function setValue(string|UssElement|null $value): self
    {
        return $this;
    }
}
