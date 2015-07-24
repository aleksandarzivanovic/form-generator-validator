<?php

class NotBlank extends FormValidator
{
    public function validate()
    {
        return false === empty($this->value);
    }

    public function getErrorMessage()
    {
        return 'Field may not be empty.';
    }
}