<?php
declare(strict_types=1);

namespace PHP_Final_Project\Repositories;

use PHP_Final_Project\Frameworks\DIContainer;


class BookRepository
{
    public function __construct(public DIContainer $container)
    {
    }

    public function getAll():array
    {
        return [];
    }
}