<?php

namespace Ucscode\UssForm\Field\Context;

use Ucscode\UssForm\Field\Foundation\AbstractFieldContext;

class GadgetWrapperContext extends AbstractFieldContext
{
    protected function created(): void
    {
        $this->addClass("gadget-wrapper");
        $this->element->setAttribute('data-el-context', 'gadgetWrapper');
    }
}