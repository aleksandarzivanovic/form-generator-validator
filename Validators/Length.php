<?php

class Length extends FormValidator
{
    const MIN_LENGTH = 'min';
    const MAX_LENGTH = 'max';

    private $data;
    private $message;

    public function __construct(array $data)
    {
        if (isset($data[self::MIN_LENGTH])) {
            $this->data[self::MIN_LENGTH] = $data[self::MIN_LENGTH];
        }

        if (isset($data[self::MAX_LENGTH])) {
            $this->data[self::MAX_LENGTH] = $data[self::MAX_LENGTH];
        }
    }

    public function validate()
    {
        if (isset($this->data[self::MIN_LENGTH]) && strlen($this->value) < $this->data[self::MIN_LENGTH]) {
            $this->message = "Length must be greater than {$this->data[self::MIN_LENGTH]}";
            return false;
        }

        if (isset($this->data[self::MAX_LENGTH]) && strlen($this->value) > $this->data[self::MAX_LENGTH]) {
            $this->message = "Length must be less than {$this->data[self::MAX_LENGTH]}";
            return false;
        }
    }

    public function getErrorMessage()
    {
        return $this->message;
    }
}