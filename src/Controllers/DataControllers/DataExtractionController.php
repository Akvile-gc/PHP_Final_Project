<?php
declare(strict_types=1);

namespace PHP_Final_Project\Controllers\DataControllers;
class DataExtractionController
{
    public function extractData(string $location):array
    {
        $extractedData = file_get_contents($location);
        if ($extractedData){
            $extracted = json_decode($extractedData, true);
        } else {
            $extracted = [];
        }
        return $extracted;
    }
}