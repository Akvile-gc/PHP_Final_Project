<?php
declare(strict_types = 1);
namespace PHP_Final_Project\Controllers\BookControllers;

use PHP_Final_Project\Controllers\DataControllers\DataEntryController;
use PHP_Final_Project\Controllers\DataControllers\DataExtractionController;
use PHP_Final_Project\Frameworks\DIContainer;
use PHP_Final_Project\Models\BookChangeInterface;
use PHP_Final_Project\Repositories\BookRepository;

class BookDeletionController implements BookChangeInterface
{
    public function __construct(private DIContainer $container)
    {
    }

    public function getBook(): void
    {
        // TODO: Implement getBook() method.
        $delete = $_POST['idDelete']; //this gets book's id
        $repository = $this->container->get(BookRepository::class);
        $books = $repository->getAll();

        require __DIR__ . "./../../../views/istrynimas.php"; //directing to the page where we will update the book info
    }

    public function changeBook(): void
    {
        // TODO: Implement changeBook() method.
        $delete = $_POST['idDelete']; //this gets book's id
        $repository = $this->container->get(BookRepository::class);
        $books = $repository->getAll();

        //$books[$edit] is choosing the specific book.
        // this logic bellow will allow to delete the book
        unset($books[$delete]);

        //putting the edited information back to the database
        $entry = $this->container->get(DataEntryController::class);
        $entry->enterData('D:\CodeAcademy\Back End\PHP\PHP_Final_Project\src\DataBase\books.json', $books);

        require __DIR__ . "./../../../views/duomenys_atnaujinti.php"; //getting the information page
    }
}