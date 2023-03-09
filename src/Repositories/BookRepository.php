<?php
declare(strict_types=1);

namespace PHP_Final_Project\Repositories;

use PHP_Final_Project\Frameworks\DIContainer;
use PHP_Final_Project\Controllers\DataControllers\DataExtractionController;


class BookRepository
{
    public function __construct(public DIContainer $container)
    {
    }

    public function getAll():array
    {
        $extractedData = $this->container->get(DataExtractionController::class);
        return $extractedData->extractData('D:\CodeAcademy\Back End\PHP\PHP_Final_Project\src\DataBase\books.json');
    }
}