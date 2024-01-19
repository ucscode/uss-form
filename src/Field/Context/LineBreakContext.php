<?php

namespace Ucscode\UssForm\Field\Context;

use Ucscode\UssElement\UssElement;
use Ucscode\UssForm\Field\Foundation\AbstractFieldContext;

class LineBreakContext extends AbstractFieldContext
{
    protected function created(): void
    {
        $this->addClass("field-break col-12");
        $this->element->setAttribute('data-el-context', 'lineBreak');
    }

    public function setValue(string|UssElement|null $value): self
    {
        return $this;
    }
}