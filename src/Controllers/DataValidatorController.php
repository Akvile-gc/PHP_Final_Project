<?php
declare(strict_types = 1);

namespace PHP_Final_Project\Controllers;

class DataValidatorController
{
    public function __construct(
        private string $name,
        private string $author,
        private int $year,
        private string $language,
        private int $copies)
    {
    }

    public function checkData(){
        if (preg_match('/([a-z A-Z])/', $this->name)){
            if (preg_match('/([a-z A-Z])/', $this->author)){
                if (preg_match(('/(1|2)(\d{3})/'), $this->year)){
                    if (preg_match('/([a-z A-Z])/', $this->language)){
                        if (preg_match(('/(\d+)/'), $this->copies)){
                            return true;
                        } else {

                        }
                    }
                }
            }
        }

    }







}