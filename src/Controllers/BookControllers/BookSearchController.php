<?php
declare(strict_types = 1);
namespace PHP_Final_Project\Controllers\BookControllers;

use PHP_Final_Project\Frameworks\DIContainer;
use PHP_Final_Project\Models\BookActionModel;
use PHP_Final_Project\Repositories\BookRepository;

class BookSearchController extends BookActionModel
{
    public function __construct(protected DIContainer $container)
    {
    }

    public function get()
    {
        // TODO: Implement get() method.
        require __DIR__ . './../../../views/paieska.php';  //getting initial form to fill in

    }

    public function action()
    {
        // TODO: Implement action() method.

        $nameSearch = $_POST['name_search'];

        $repository = $this->container->get(BookRepository::class);
        $books = $repository->getAll();
        $result = [];

        if ($nameSearch){
            foreach ($books as $book){
                if ($book['name'] === $nameSearch){
                    $result[] = $book;
                }
            }
        }
        require __DIR__ . './../../../views/knygu_rezultatai.php';  //getting search results
    }

    public function secondAction()
    {
        $authorSearch = $_POST['author_search'];

        $repository = $this->container->get(BookRepository::class);
        $books = $repository->getAll();
        $result = [];

        if ($authorSearch){
            foreach ($books as $book){
                if ($book['author'] === $authorSearch){
                    $result[] = $book;
                }
            }
        }
        require __DIR__ . './../../../views/autoriu_rezultatai.php';  //getting search results
    }
}