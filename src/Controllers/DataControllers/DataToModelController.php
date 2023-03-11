<?php
declare(strict_types = 1);

namespace PHP_Final_Project\Controllers\DataControllers;

use PHP_Final_Project\Frameworks\DIContainer;
use PHP_Final_Project\Models\BookModel;
use PHP_Final_Project\Repositories\BookRepository;

class DataToModelController
{
    public function __construct(
        private DIContainer $container)
    {
    }
    public function changeData()
    {
        $repository = $this->container->get(BookRepository::class);
        $existingBooks = $repository->getAll();

        $encode = $this->container->get(DataEntryController::class);

        $name = $_POST['name'];
        $author = $_POST['author'];
        $year = (int)$_POST['year'];
        $language = $_POST['language'];
        $copies = (int)$_POST['copies'];

        if (empty($existingBooks)) {
            $id = count($existingBooks);
            $newBook = new BookModel($id, $name, $author, $year, $language, $copies);
            $book = [
                'id'=>$newBook->getId(),
                'name'=>$newBook->getName(),
                'author'=>$newBook->getAuthor(),
                'year'=>$newBook->getYear(),
                'language'=>$newBook->getLanguage(),
                'copies'=>$newBook->getCopies()
            ];
            $existingBooks[] = $book; //inserting new book to the books array
        } else {
            $entered = false;

            foreach ($existingBooks as $key => $book) {
                /* check if there are any other books by the same author, name, release year and language.
                      if(true) - add number of copies to available copies
                      else - create new book
                 */
                if ($existingBooks[$key]['name'] === $name &&
                    $existingBooks[$key]['author'] === $author &&
                    $existingBooks[$key]['year'] === $year &&
                    $existingBooks[$key]['language'] === $language) {
                    $existingBooks[$key]["copies"] += $copies;
                    $entered = true;
                    break;
                }
            }
            if ($entered !== true){
                $id = count($existingBooks);
                $newBook = new BookModel($id, $name, $author, $year, $language, $copies);
                $book = [
                    'id'=>$newBook->getId(),
                    'name'=>$newBook->getName(),
                    'author'=>$newBook->getAuthor(),
                    'year'=>$newBook->getYear(),
                    'language'=>$newBook->getLanguage(),
                    'copies'=>$newBook->getCopies(),
                ];
                $existingBooks[] = $book; //inserting new book to the books array
            }
        }
        $encode->enterData('D:\CodeAcademy\Back End\PHP\PHP_Final_Project\src\DataBase\books.json', $existingBooks); //encoding new data
    }
}