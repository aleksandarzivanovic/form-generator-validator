<?php

class InList extends FormValidator
{
    /** @var array */
    private $items = array();

    /** @var bool */
    private $strict = false;

    public function __construct(array $list, $strict = false)
    {
        $this->items = $list;
        $this->strict = $strict;
    }

    public function validate()
    {
        return in_array($this->value, $this->items, $this->strict);
    }

    public function getErrorMessage()
    {
        return "{$this->value} not found ind list";
    }
}