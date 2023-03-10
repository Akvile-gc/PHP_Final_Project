<?php
declare(strict_types = 1);
namespace PHP_Final_Project\Controllers\BookControllers;

use PHP_Final_Project\Controllers\DataControllers\DataEntryController;
use PHP_Final_Project\Controllers\DataControllers\DataExtractionController;
use PHP_Final_Project\Frameworks\DIContainer;

class BookEditController
{
    public function __construct(private DIContainer $container)
    {
    }

    public function editBook()
    {
        $edit = $_POST['id'];
        $location = 'D:\CodeAcademy\Back End\PHP\PHP_Final_Project\src\DataBase\books.json';
        $extraction = $this->container->get(DataExtractionController::class);
        $books = $extraction->extractData($location);

        $books[$edit]['id'] =


        $entry = $this->container->get(DataEntryController::class);

        $entry->enterData($location, $books);

        require __DIR__ . "./../../../views/redagavimas.php";

    }
}