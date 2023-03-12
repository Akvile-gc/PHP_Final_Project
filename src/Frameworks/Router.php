<?php
declare(strict_types=1);

namespace PHP_Final_Project\Frameworks;


use PHP_Final_Project\Controllers\BookControllers\BookEditController;
use PHP_Final_Project\Controllers\BookControllers\BookListController;
use PHP_Final_Project\Controllers\BookControllers\BookSearchController;
use PHP_Final_Project\Controllers\BookControllers\NewBookController;
use PHP_Final_Project\Controllers\BookControllers\BookDeletionController;
use PHP_Final_Project\Controllers\InitialPageController;

class Router
{
    public function __construct(protected DIContainer $container)
    {
    }

    public function process(string $path, string $method)
    {
        $initialPageController = $this->container->get(InitialPageController::class);
        $newBookController = $this->container->get(NewBookController::class);
        $bookListController = $this->container->get(BookListController::class);
        $bookEditController = $this->container->get(BookEditController::class);
        $bookDeletionController = $this->container->get(BookDeletionController::class);
        $bookSearchController = $this->container->get(BookSearchController::class);

        if($path === '/biblioteka' && $method === 'GET'){
            $initialPageController->getNewPage();
        } elseif ($path === '/knyga' && $method === 'GET'){
            $newBookController->get(); //getting the form to add books
        } elseif ($path === '/knyga' && $method === 'POST') {
            $newBookController->action(); //adding new book
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
        } elseif ($path === '/paieska' && $method === 'GET'){
            $bookSearchController->get();
        } elseif ($path === '/paieska' && $method === 'POST'){
            if (isset($_POST['search_n'])){ //if the user searches the book by its name, we are doing the logic bellow
                $bookSearchController->action();
            }
            if (isset($_POST['search_a'])){ //if the user searches the book by its author, we are doing the logic bellow
                $bookSearchController->secondAction();
            }
        }
    }
}