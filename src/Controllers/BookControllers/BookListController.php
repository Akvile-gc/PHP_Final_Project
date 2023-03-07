<?php
declare(strict_types=1);

namespace PHP_Final_Project\Controllers\BookControllers;

use PHP_Final_Project\Frameworks\DIContainer;

class BookListController
{
    public function __construct(public DIContainer $container)
    {
    }

//
//    public function getBookList()
//    {
//
//        $book = $this->container->get(BookRepository::class);
//        $bookList = $book->getAll();
//
//        require __DIR__ . "/../../views/visos_knygos.php";
//    }
}