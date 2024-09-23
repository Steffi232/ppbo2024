<?php

class Book
{
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, Author $author, Publisher $publisher)
    {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function show($buku)
    {
        switch ($buku) {
            case 'array':
                return [
                    'ISBN' => $this->ISBN,
                    'title' => $this->title,
                    'description' => $this->description,
                    'category' => $this->category,
                    'language' => $this->language,
                    'numberOfPage' => $this->numberOfPage,
                    'author' => $this->author->show('array'),
                    'publisher' => [
                        'name' => $this->publisher->name,
                        'address' => $this->publisher->address,
                    ],
                ];
                break;
            default:
                throw new Exception('Tipe data tidak didukung');
        }
    }

    public function detail($ISBN)
    {
        if ($this->ISBN === $ISBN) {
            return [
                'ISBN' => $this->ISBN,
                'title' => $this->title,
                'description' => $this->description,
                'category' => $this->category,
                'language' => $this->language,
                'numberOfPage' => $this->numberOfPage,
                'author' => $this->author->show('array'),
                'publisher' => [
                    'name' => $this->publisher->name,
                    'address' => $this->publisher->address,
                ],
            ];
        } else {
            throw new Exception('ISBN tidak ditemukan');
        }
    }
}

?>