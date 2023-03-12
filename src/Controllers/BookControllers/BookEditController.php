<?php
declare(strict_types = 1);
namespace PHP_Final_Project\Controllers\BookControllers;

use PHP_Final_Project\Controllers\DataControllers\DataEntryController;
use PHP_Final_Project\Controllers\DataControllers\DataExtractionController;
use PHP_Final_Project\Frameworks\DIContainer;
use PHP_Final_Project\Models\BookChangeInterface;
use PHP_Final_Project\Repositories\BookRepository;

class BookEditController implements BookChangeInterface
{
    public function __construct(private DIContainer $container)
    {
    }

    public function getBook(): void
    {
        // TODO: Implement getBook() method.
        $edit = $_POST['id']; //this gets book's id
        $repository = $this->container->get(BookRepository::class);
        $books = $repository->getAll(); //gets all books

        require __DIR__ . "./../../../views/redagavimas.php"; //directing to the page where we will update the book info
    }

    public function changeBook(): void
    {
        // TODO: Implement changeBook() method.
        $edit = $_POST['id']; //this gets book's id
        $repository = $this->container->get(BookRepository::class);
        $books = $repository->getAll(); //gets all books

        //$books[$edit] is choosing the specific book.
        // this logic bellow will allow to change the book's current values to the edited ones
        $books[$edit]['name'] = $_POST['edit_name'];
        $books[$edit]['author'] = $_POST['edit_author'];
        $books[$edit]['year'] = (int)$_POST['edit_year'];
        $books[$edit]['language'] = $_POST['edit_language'];
        $books[$edit]['copies'] = (int)$_POST['edit_copies'];

        //putting the edited information back to the database
        $entry = $this->container->get(DataEntryController::class);
        $entry->enterData('D:\CodeAcademy\Back End\PHP\PHP_Final_Project\src\DataBase\books.json', $books);

        require __DIR__ . "./../../../views/duomenys_atnaujinti.php"; //getting the information page
    }
}