<?php

abstract class FormValidator
{
    /** @var string */
    protected $value;

    /** @var Form */
    protected $form;

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @param Form $form
     */
    public function setForm(Form $form)
    {
        $this->form = $form;
    }

    public abstract function validate();

    public abstract function getErrorMessage();
}