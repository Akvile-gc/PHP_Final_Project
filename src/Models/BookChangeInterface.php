<?php
declare(strict_types = 1);

namespace PHP_Final_Project\Models;

use PHP_Final_Project\Controllers\DataControllers\DataExtractionController;
use PHP_Final_Project\Frameworks\DIContainer;

class BookChangeModel
{
    public function __construct(private DIContainer $container)
    {
    }

    public function getBook()
    {
        $edit = $_POST['id']; //this gets book's id
        $location = 'D:\CodeAcademy\Back End\PHP\PHP_Final_Project\src\DataBase\books.json';
        $extraction = $this->container->get(DataExtractionController::class);
        $books = $extraction->extractData($location);

        require __DIR__ . "./../../../views/redagavimas.php"; //directing to the page where we will update the book info

    }
}