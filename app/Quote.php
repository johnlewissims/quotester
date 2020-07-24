<?php

namespace App;

use Config;
use Date;

class Quote 
{
    private $quotes;

    /**
     * Passing the Quotes Array into the Conctructor
     * 
     */
    public function __construct() {
        $this->quotes = config('quotes');
    }

    /**
     * Return Unfiltered Array of Quotes
     * 
     */
    public function getQuotes() {
        return $this->quotes;
        
    }

    /**
     * Replace Array of Quotes with New Array of Quotes
     * Return New Array
     * 
     * @param  array $quotes
     * @return array
     */
    public function setQuotes(array $quotes) {
        Config::set('quotes', $quotes);
        return Config::get('quotes');
    }

    /**
     * Return 'Quote of the Day'
     * 
     * @param  $date
     * @return array
     */
    public function quotd($date) {
        // Sanity Check
        // Set Default Date to Today
        if($date == '1970-01-01') {
            $date = date("j");
        }

        //Get Day of the Month
        $day = date("j", strtotime($date));
        return $this->quotes[$day];
    }

    /**
     * Returns Random Quotes
     * 
     * @param $session
     */
    public function random($session) {

        // If Session Variable Doesn't Exist 
        // Save Array of Quotes to Session Variable
        if(!$session) {
            session(['unread_quotes' => $this->quotes]);
        } 

        // Session Variable Array
        $unreadQuotes = session('unread_quotes');

        // Random Index in Array
        $randomIndex = rand(0, count($unreadQuotes));

        // Select Random Quote
        $selectedQuote = $unreadQuotes[$randomIndex];

        // Remove Selected Quote from Array
        unset($unreadQuotes[$randomIndex]);  

        // Save New Array to Session Variable
        session(['unread_quotes' => array_values($unreadQuotes)]);

        return $selectedQuote;
        
    }

    /**
     * Return Array of Quotes that Match Search Term
     * 
     * @param $session
     */
    public function search($word) {
        // Filters Array by Search Term
        // If String is Found in Either Author or Quote
        $filteredArray = array_filter($this->quotes, function ($var) use ($word) {
            return (stripos($var['text'], $word) !== false || stripos($var['author'], $word) !== false);
        });
        return $filteredArray;
    }   

}