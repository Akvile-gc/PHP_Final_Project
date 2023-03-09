<?php
declare(strict_types = 1);

namespace PHP_Final_Project\Controllers\DataControllers;

use PHP_Final_Project\Controllers\ErrorMessageController;
use PHP_Final_Project\Frameworks\DIContainer;

class DataValidatorController
{
    public function __construct(
        private DIContainer $container)
    {
    }

    public function validate()
    {
//        $exception = $this->container->get(BookException::class);
        $error = $this->container->get(ErrorMessageController::class); //getting the error messages

        $name = $_POST['name'];
        $author = $_POST['author'];
        $year = $_POST['year'];
        $language = $_POST['language'];
        $copies = $_POST['copies'];

        if (preg_match('/([a-z A-Z])/', $name)){
            if (preg_match('/([a-z A-Z])/', $author)){
                if (preg_match(('/(1|2)(\d{3})/'), $year)){
                    if (preg_match('/([a-z A-Z])/', $language)){
                        if (preg_match(('/(\d+)/'), $copies)){
                            return true;
                        } else {
                            throw new \Exception($error->wrongCopies());
//                            throw $exception($error->wrongCopies());
                        }
                    } else {
                        throw new \Exception($error->wrongLanguage());
//                        throw $exception($error->wrongLanguage());
                    }
                } else {
                    throw new \Exception($error->wrongYear());
//                    throw $exception($error->wrongYear());
                }
            } else {
                throw new \Exception($error->wrongAuthor());
//                throw $exception($error->wrongAuthor());
            }
        } else {
            throw new \Exception($error->wrongName());
//            throw $exception($error->wrongName());
        }
    }
}