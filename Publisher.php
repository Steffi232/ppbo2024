<?php

class Publisher
{
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address, $phone)
    {
        $this->name = $name;
        $this->address = $address;
        $this->setPhone($phone);
    }

    public function setPhone($phone)
    {
        if (is_int($phone)) {
            $this->phone = $phone;
        } else {
            throw new Exception('Nomor telepon harus berupa integer');
        }
    }

    public function getPhone()
    {
        return $this->phone;
    }
}

?>