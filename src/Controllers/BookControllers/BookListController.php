<?php
declare(strict_types=1);

namespace PHP_Final_Project\Controllers\BookControllers;

use PHP_Final_Project\Frameworks\DIContainer;
use PHP_Final_Project\Repositories\BookRepository;

class BookListController
{
    public function __construct(public DIContainer $container)
    {
    }

    public function getBookList()
    {

        $books = $this->container->get(BookRepository::class);
        $bookList = $books->getAll();

        require __DIR__ . "./../../../views/visos_knygos.php";
    }
}