<?php

class Numeric extends FormValidator
{
    public function validate()
    {
        return is_numeric($this->value);
    }

    public function getErrorMessage()
    {
        return 'Field must be numeric';
    }
}