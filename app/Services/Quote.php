<?php

namespace App\Services;

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
        return $quotes;
    }
}