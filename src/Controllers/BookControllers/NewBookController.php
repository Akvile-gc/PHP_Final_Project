<?php
declare(strict_types=1);

namespace PHP_Final_Project\Controllers\BookControllers;

use PHP_Final_Project\Controllers\DataControllers\DataToModelController;
use PHP_Final_Project\Controllers\DataControllers\DataValidatorController;
use PHP_Final_Project\Frameworks\DIContainer;
use PHP_Final_Project\Models\BookException;

class NewBookController
{
    public function __construct(public DIContainer $container)
    {
    }

    public function set()
    {
        $message = '';
        require __DIR__ . './../../../views/knyga.php';  //getting initial form to fill in
    }

    public function add()
    {
        $validator = $this->container->get(DataValidatorController::class); // need to create one

        try {
            $validator->validate(); //checking whether the data is correct (data types matches)
            $dataToModel = $this->container->get(DataToModelController::class);
            $dataToModel->changeData(); //either increasing the number of copies or creating a new book
            $message = 'Jūsų knyga pridėta'; //if successful
        } catch (\Exception $e){
            $message = $e->getMessage(); //if unsuccessful
        }

//        $location = __DIR__ . './../../DataBase/books.json';
//
//        //json decoding
//        $decode = $this->container->get(DataExtractionController::class);
//        $existingBooks = $decode->extractData($location);
//
//        //json encoding
//        $encode = $this->container->get(DataEntryController::class);
//
//
//        $name = $_POST['name'];
//        $author = $_POST['author'];
//        $year = (int)$_POST['year'];
//        $language = $_POST['language'];
//        $copies = (int)$_POST['copies'];
//
//
//        foreach ($existingBooks as $book){
//            if ($book['name'] === $name &&
//                $book['author'] === $author &&
//                $book['year'] === $year &&
//                $book['language'] === $language){
//                    $book['copies'] += $copies;
//            } else {
//                $id = count($existingBooks);
//                $newBook = new BookModel($id, $name, $author, $year, $language, $copies);
//                $enteredBook = [
//                    'id'=>$newBook->getId(),
//                    'name'=>$newBook->getName(),
//                    'author'=>$newBook->getAuthor(),
//                    'year'=>$newBook->getYear(),
//                    'language'=>$newBook->getLanguage(),
//                    'copies'=>$newBook->getCopies()
//                ];
//                $existingBooks[] = $enteredBook; //inserting new book to the books array
//            }
//        }
//        $encode->enterData($location, $existingBooks); //encoding new data
//
//
        require __DIR__ . './../../../views/knyga.php';  //the form with the $message added
    }
}