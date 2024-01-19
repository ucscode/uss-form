<?php

namespace Ucscode\UssForm\Field\Context;

use Ucscode\UssForm\Field\Foundation\AbstractFieldContext;

class InfoContext extends AbstractFieldContext
{
    protected function created(): void
    {
        $this->addClass('field-info small');
        $this->element->setAttribute('data-el-context', 'info');
    }
}
