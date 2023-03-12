<?php
declare(strict_types=1);

namespace PHP_Final_Project\Controllers\BookControllers;

use PHP_Final_Project\Controllers\DataControllers\DataToModelController;
use PHP_Final_Project\Controllers\DataControllers\DataValidatorController;
use PHP_Final_Project\Frameworks\DIContainer;
use PHP_Final_Project\Models\BookActionModel;
use PHP_Final_Project\Models\BookException;


class NewBookController extends BookActionModel
{
    public function __construct(protected DIContainer $container)
    {
    }

    public function get()
    {
        $message = ''; //so in the initial html form it wouldn't show an error
        require __DIR__ . './../../../views/knyga.php';  //getting initial form to fill in
    }

    public function action()
    {
        // TODO: Implement action() method.
        $validator = $this->container->get(DataValidatorController::class); // need to create one

        try {
            $validator->validate(); //checking whether the data is correct (data types matches)
            $dataToModel = $this->container->get(DataToModelController::class);
            $dataToModel->changeData(); //either increasing the number of copies or creating a new book
            $message = 'Jūsų knyga pridėta'; //if successful
        } catch (\Exception $e){
            $message = $e->getMessage(); //if unsuccessful
        }

        require __DIR__ . './../../../views/knyga.php';  //the form with the $message added
    }
}