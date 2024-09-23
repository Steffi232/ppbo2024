<?php

class Author
{
    public $name;
    public $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($buku)
    {
        switch ($buku) {
            case 'array':
                return [
                    'name' => $this->name,
                    'description' => $this->description,
                ];
                break;
            default:
                throw new Exception('Tipe data tidak didukung');
        }
    }
}

?>