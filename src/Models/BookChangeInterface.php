<?php
declare(strict_types = 1);

namespace PHP_Final_Project\Models;

interface BookChangeInterface
{
    public function getBook():void;
    public function changeBook():void;
}