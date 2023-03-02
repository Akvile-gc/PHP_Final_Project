<?php
declare(strict_types=1);

namespace PHP_Final_Project\Controllers;

use PHP_Final_Project\Frameworks\DIContainer;

class NewBookController
{
    public function __construct(public DIContainer $container)
    {
    }

    public function set()
    {
        require __DIR__ . "/../../views/knyga.php";  //getting initial form to fill in
    }

/*
    public function add()
    {

            $newBook = //getting values for the new book
        $validator = $this->container->get(DateValidatorController::class); // need to create one

  should add books
  1. validate ->

        try {
            $validator->validate($newBook);  //checking whether the data is correct (data types matches)
            move to 2.
            $message = 'Jūsų knyga pridėta';
        } catch (\Exception $e){
            $message = $e->getMessage();

    exception could be 'Prašome įvesti teisingus duomenis'
        }

  2. check if there are any other books by the same author, name, release year and language.

  if(true){
   add number of copies to available copies
  } else {
   create new book
  }
        require __DIR__ . "/../../views/knyga.php";
    }
*/
}