<?php
declare(strict_types=1);

namespace PHP_Final_Project\Models;
class BookModel
{
    public function __construct(
        private int $id,
        private string $name,
        private string $author,
        private int $year,
        private string $language,
        private int $copies)
    {
    }
    public function getId():int {
        return $this->id;
    }

    public function getName():string {
        return $this->name;
    }

    public function getAuthor():string {
        return $this->author;
    }

    public function getYear():int {
        return $this->year;
    }

    public function getLanguage():string {
        return $this->language;
    }

    public function getCopies():int {
        return $this->copies;
    }
}