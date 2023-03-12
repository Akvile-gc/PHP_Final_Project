<?php

declare(strict_types=1);

namespace PHP_Final_Project\Controllers;

use PHP_Final_Project\Models\ErrorMessageInterface;

class ErrorMessageController implements ErrorMessageInterface {
    public function wrongName(): string
    {
        // TODO: Implement wrongName() method.

        return 'Jūs įvedėte klaidingą knygos pavadinimą. Prašome įvesti raides.';
    }

    public function wrongAuthor(): string
    {
        // TODO: Implement wrongAuthor() method.
        return 'Jūs įvedėte klaidingą knygos autorių. Prašome įvesti raides.';
    }

    public function wrongYear(): string
    {
        // TODO: Implement wrongYear() method.
        return 'Jūs įvedėte klaidingus metus. Prašome įvesti metus šiuo formatu - xxxx. Metai turėtų prasidėti skaičiu 1 arba 2';
    }

    public function wrongLanguage(): string
    {
        // TODO: Implement wrongLanguage() method.
        return 'Jūs įvedėte klaidingą knygos kalbą. Prašome įvesti raides.';
    }

    public function wrongCopies(): string
    {
        // TODO: Implement wrongCopies() method.
        return 'Jūs įvedėte klaidingą turimų knygų skaičių. Prašome įvesti skaičių.';
    }
}