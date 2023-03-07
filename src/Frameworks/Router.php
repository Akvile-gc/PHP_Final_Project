<?php
declare(strict_types=1);

namespace PHP_Final_Project\Frameworks;


use PHP_Final_Project\Controllers\BookControllers\NewBookController;

class Router
{
    public function __construct(protected DIContainer $container)
    {
    }

    public function process(string $path, string $method)
    {
        $newBookController = $this->container->get(NewBookController::class);

        if($path === '/knyga' && $method === 'GET'){
            $newBookController->set(); //getting the form to add books
        } elseif ($path === '/knyga' && $method === 'POST') {
            $newBookController->add(); //adding new book
        }

    }
}