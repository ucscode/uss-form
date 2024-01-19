<?php

namespace Ucscode\UssForm\Gadget\Context;

use Ucscode\UssElement\UssElement;
use Ucscode\UssForm\Field\Field;
use Ucscode\UssForm\Gadget\Foundation\AbstractGadgetContext;

class ContainerContext extends AbstractGadgetContext
{
    protected function created(): void
    {
        $class = 'widget-container input-single my-1';
        if($this->gadget->widget->isCheckable()) {
            $class .= ' form-check';
            if($this->gadget->widget->nodeType === Field::TYPE_SWITCH) {
                $class .= ' form-switch';
            }
        }
        $this->addClass($class);
        $this->element->setAttribute('data-foundation', 'gadget');
        $this->element->setAttribute('data-el-context', 'container');
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
