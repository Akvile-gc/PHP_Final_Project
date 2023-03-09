<?php

declare(strict_types=1);

namespace PHP_Final_Project\Models;
interface ErrorMessageInterface
{
    public function wrongName():string;
    public function wrongAuthor():string;

    public function wrongYear():string;
    public function wrongLanguage():string;
    public function wrongCopies():string;
}