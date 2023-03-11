<?php
declare(strict_types = 1);
namespace PHP_Final_Project\Controllers\BookControllers;

use PHP_Final_Project\Frameworks\DIContainer;
use PHP_Final_Project\Models\BookActionModel;

class BookSearchController extends BookActionModel
{
    public function __construct(protected DIContainer $container)
    {
    }

    public function get()
    {
        // TODO: Implement get() method.
        require __DIR__ . './../../../views/paieska.php';  //getting initial form to fill in

    }

    public function action()
    {
        // TODO: Implement action() method.
    }
}
