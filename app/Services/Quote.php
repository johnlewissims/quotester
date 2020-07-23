<?php

namespace App\Services;

use Config;
use Date;

class Quote 
{
    private $quotes;

    public function __construct() {
        $this->quotes = config('quotes');
    }

    public function getQuotes() {
        return $this->quotes;
    }

    public function setQuotes(array $quotes) {
        Config::set('quotes', $quotes);
        return Config::get('quotes');
    }

    public function quotd($date) {

        // Sanity Check
        // Set Default Date to Today
        if($date == '1970-01-01') {
            $date = date("Y-m-d");
        }

        //Get Day of the Month
        $day = date("d");
        return $this->quotes[$day];
    }
}