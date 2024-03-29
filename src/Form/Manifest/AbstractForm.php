<?php

namespace Ucscode\UssForm\Form\Manifest;

use Ucscode\UssElement\UssElement;
use Ucscode\UssForm\Collection\Collection;
use Ucscode\UssForm\Form\Attribute;
use Ucscode\UssForm\Resource\Service\Utils\FieldUtils;

abstract class AbstractForm implements FormInterface
{
    public const DEFAULT_COLLECTION = 'primary';
    protected readonly UssElement $element;
    protected array $collections = [];

    public function __construct(public readonly Attribute $attribute = new Attribute())
    {
        $this->element = new UssElement(UssElement::NODE_FORM);
        $this->element->setAttribute('class', 'form row');
        $attribute->defineFormInstanceOnce($this);
        $this->addCollection(self::DEFAULT_COLLECTION, new Collection());
    }

    protected function bindAttribute(string $name, ?string $value): void
    {
        !empty($value) ? $this->element->setAttribute($name, $value) : null;
    }

    protected function swapCollection(UssElement $collection, ?UssElement $oldCollection): void
    {
        $oldCollection ?
            $this->element->replaceChild($collection, $oldCollection) :
            $this->element->appendChild($collection);
    }

    protected function welcomeCollection(string $name, Collection $collection): void
    {
        $fieldsetContext = $collection->getElementContext()->fieldset;
        if(!$fieldsetContext->isFixed()) {
            $fieldsetContext->addClass((new FieldUtils())->simplifyContent($name, '-') . "-collection");
        }
    }

    protected function dataToLinearArray(array $data, string $prefix = ''): array
    {
        $result = array();
        foreach($data as $key => $value) {
            $offset = empty($prefix) ? $key : $prefix . "[$key]";
            if(!is_array($value)) {
                $result[$offset] = $value;
                continue;
            }
            $result += $this->dataToLinearArray($value, $offset);
        };
        return $result;
    }
}
