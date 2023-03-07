<?php

declare(strict_types=1);

namespace PHP_Final_Project\Models\MessageModels;

class ErrorMessage implements ErrorMessageInterface {
    public function wrongName(): string
    {
        // TODO: Implement wrongName() method.

        return 'Jūs įvedėte klaidingą knygos pavadinimą.';
    }

    public function wrongAuthor(): string
    {
        // TODO: Implement wrongAuthor() method.
        return 'Jūs įvedėte klaidingą knygos autorių.';
    }

    public function wrongYear(): string
    {
        // TODO: Implement wrongYear() method.
        return 'Jūs įvedėte klaidingus metus.';
    }

    public function wrongLanguage(): string
    {
        // TODO: Implement wrongLanguage() method.
        return 'Jūs įvedėte klaidingą knygos kalbą.';
    }

    public function wrongCopies(): string
    {
        // TODO: Implement wrongCopies() method.
        return 'Jūs įvedėte klaidingą turimų knygų skaičių.';
    }
}