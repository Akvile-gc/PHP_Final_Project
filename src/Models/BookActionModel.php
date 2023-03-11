<?php
declare(strict_types = 1);
namespace PHP_Final_Project\Models;

use PHP_Final_Project\Frameworks\DIContainer;

abstract class BookActionModel
{
    public function __construct(protected DIContainer $container)
    {
    }

    abstract public function get();

    abstract public function action();
}