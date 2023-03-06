<?php
declare(strict_types = 1);

namespace PHP_Final_Project\Controllers;

use PHP_Final_Project\Frameworks\DIContainer;

class DataToModelController
{
    public function __construct(
        private string $name,
        private string $author,
        private string $year,
        private string $language,
        private string $copies,
        private DIContainer $container)
    {
    }

    public function changeData()
    {
//        $id = $this->id;
        $name = $this->name;
        $author = $this->author;
        $year = $this->year;
        $language = $this->language;
        $copies = $this->copies;



    }



//        if ($currentMonth - $monthInt === 1) {  //good condition, can move on to the next steps
//            $kw = $taxDataArray[0];
//            $tariff = $taxDataArray[1];
//            $type = $taxDataArray[2];
//            $tax = new Tax($kw, $tariff, $type, $month);
//            $enteredData = [
//                'kw'=>$tax->getKw(),
//                'tariff'=>$tax->getTariff(),
//                'type'=>$tax->getType(),
//                'month'=>$tax->getMonth()
//            ];
//
//            $data = $decoding->extractData($location); //getting existing data
//
//            $data[] = $enteredData; //inserting new tax data to the file
//
//            $encoding->enterData($location, $data); //encoding new data
//            return $enteredData;
//    }


}