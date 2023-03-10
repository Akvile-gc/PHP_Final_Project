<?php
declare(strict_types=1);

namespace PHP_Final_Project\Frameworks;


use PHP_Final_Project\Controllers\BookControllers\BookEditController;
use PHP_Final_Project\Controllers\BookControllers\BookListController;
use PHP_Final_Project\Controllers\BookControllers\NewBookController;
use PHP_Final_Project\Controllers\BookControllers\BookDeletionController;

class Router
{
    public function __construct(protected DIContainer $container)
    {
    }

    public function process(string $path, string $method)
    {
        $newBookController = $this->container->get(NewBookController::class);
        $bookListController = $this->container->get(BookListController::class);
        $bookEditController = $this->container->get(BookEditController::class);
        $bookDeletionController = $this->container->get(BookDeletionController::class);


        if($path === '/knyga' && $method === 'GET'){
            $newBookController->set(); //getting the form to add books
        } elseif ($path === '/knyga' && $method === 'POST') {
            $newBookController->add(); //adding new book
        } elseif ($path === '/visos_knygos' && $method === 'GET') {
            $bookListController->getBookList(); //
        } elseif ($path === '/visos_knygos' && $method === 'POST') {
            $bookEditController->editBook();

//            $bookDeletionController->deleteBook();
        }

//    } elseif ($path === '/form' && $method === 'POST') {
//$taxController->add(); //adding data
//} elseif ($path === '/data_entered' && $method === 'POST') {
//$taxController->countTotal(); //counting total
//} elseif ($path === '/total' && $method === 'POST') {
//$totalController->pay(); //paying
//}

    }
}