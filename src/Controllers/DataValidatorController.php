<?php
declare(strict_types = 1);

namespace PHP_Final_Project\Controllers;

use PHP_Final_Project\Frameworks\DIContainer;
use PHP_Final_Project\Models\BookException;
use PHP_Final_Project\Models\ErrorMessage;

class DataValidatorController
{
    public function __construct(
        private string $name,
        private string $author,
        private string $year,
        private string $language,
        private string $copies,
        private DIContainer $container)
    {
    }

    public function validate()
    {
        $exception = $this->container->get(BookException::class);
        $error = $this->container->get(ErrorMessage::class); //getting the error messages

        if (preg_match('/([a-z A-Z])/', $this->name)){
            if (preg_match('/([a-z A-Z])/', $this->author)){
                if (preg_match(('/(1|2)(\d{3})/'), $this->year)){
                    if (preg_match('/([a-z A-Z])/', $this->language)){
                        if (preg_match(('/(\d+)/'), $this->copies)){

                            //use DataToModelController

                            return true;
                        } else {
//                            throw new BookException($error->wrongCopies());
                            throw $exception($error->wrongCopies());
                        }
                    } else {
                        throw $exception($error->wrongLanguage());
                    }
                } else {
                    throw $exception($error->wrongYear());
                }
            } else {
                throw $exception($error->wrongAuthor());
            }
        } else {
            throw $exception($error->wrongName());
        }
    }
}