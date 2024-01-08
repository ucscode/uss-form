<?php

namespace Ucscode\UssForm\Form;

use Exception;

class Attribute
{
    protected ?Form $form = null;

    protected array $attributes = [
        'action' => null,
        'target' => null,
        'accept-charset' => null,
        'enctype' => null,
        'autoComplete' => null,
        'method' => 'post',
    ];

    public function __construct(protected ?string $name = null)
    {
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        $this->bind('name', $name);
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setAction(?string $action): self
    {
        $this->attributes['action'] = $action;
        $this->bind('action', $action);
        return $this;
    }

    public function getAction(): ?string
    {
        return $this->attributes['action'];
    }

    public function setMethod(string $method): self
    {
        $this->attributes['method'] = $method;
        $this->bind('method', $method);
        return $this;
    }

    public function getMethod(): string
    {
        return $this->attributes['method'];
    }

    public function setEnctype(?string $enctype): self
    {
        $this->attributes['enctype'] = $enctype;
        $this->bind('enctype', $enctype);
        return $this;
    }

    public function getEnctype(): ?string
    {
        return $this->attributes['enctype'];
    }

    public function setTarget(?string $target): self
    {
        $this->attributes['target'] = $target;
        $this->bind('target', $target);
        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->attributes['target'];
    }

    public function setAutoComplete(?string $autoComplete): self
    {
        $this->attributes['autocomplete'] = $autoComplete;
        $this->bind('autocomplete', $autoComplete);
        return $this;
    }

    public function getAutoComplete(): ?string
    {
        return $this->attributes['autocomplete'];
    }

    public function setCharset(?string $charset): self
    {
        $this->attributes['accept-charset'] = $charset;
        $this->bind("accept-charset", $charset);
        return $this;
    }

    public function getCharset(): ?string
    {
        return $this->attributes['accept-charset'];
    }

    public function fetchAll(): array
    {
        return $this->attributes;
    }

    public function defineFormInstanceOnce(Form $form): void
    {
        if($this->form) {
            throw new Exception(
                "Form Instance cannot be defined more than once for an Attribute instance"
            );
        }

        $this->form = $form;

        $this->setName($this->attributes['name']);
        $this->setMethod($this->attributes['method']);
        $this->setAction($this->attributes['action']);
        $this->setEnctype($this->attributes['enctype']);
        $this->setCharset($this->attributes['accept-charset']);
        $this->setAutoComplete($this->attributes['autocomplete']);
    }

    protected function bind(string $name, ?string $value): void
    {
        $this->form && !empty($value) ?
            $this->form->getElement()->setAttribute($name, $value) : null;
    }
}
