<?php
declare(strict_types=1);

namespace PHP_Final_Project\Frameworks;


use PHP_Final_Project\Controllers\BookControllers\BookEditController;
use PHP_Final_Project\Controllers\BookControllers\BookListController;
use PHP_Final_Project\Controllers\BookControllers\BookSearchController;
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
            if (isset($_POST['id'])){ //if the user press the button to edit the book, we are doing the logic bellow
                $bookEditController->getBook();
            }
            if (isset($_POST['idDelete'])){ //if the user press the button to delete the book, we are doing the logic bellow
                $bookDeletionController->getBook();
            }
        } elseif ($path ==='/redagavimas' && $method === 'POST'){
            $bookEditController->changeBook();
        } elseif ($path ==='/istrynimas' && $method === 'POST'){
            $bookDeletionController->changeBook();
        }
    }
}