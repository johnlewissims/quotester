<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

use App\Quote;

class QuoteController extends Controller
{

    /**
     * Saving Quote Class to Variable
     * 
     */
    public function __construct() {
        $this->quote = new Quote();
    }

    /**
     * Return Home Page of Application
     *
     * @return view
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Get Array of All Quotes
     *
     * @return array
     */
    public function getQuotes()
    {
        return $this->quote->getQuotes();
    } 

    /**
     * Replace Array of Quotes in Config with New Array of Quotes
     * Dummy Array Provided for Testing
     * 
     * @param  Request $request
     * @return array
     */
    public function setQuotes(Request $request)
    {
        //$replacement = $request->replacement;

        $replacement = 
        [
            0 => [
                "author" => "Mark Gibbs",
                "text" => "No matter how slick the demo is in rehearsal, when you do it in front of a live audience, the probability of a flawless presentation is inversely proportional to the number of people watching, raised to the power of the amount of money involved.",
            ]            
        ];

        return $this->quote->setQuotes($replacement);
    }

    /**
     * Return Quote of the Day
     *
     * @param  Request $request
     * @return array
     */
    public function quotd(Request $request)
    {
        return $this->quote->quotd(date('Y-m-d', strtotime($request->query('d'))));
    } 

    /**
     * Return Random Quote
     *
     * @param  Request $request
     * @return array
     */
    public function random(Request $request)
    {
        return $this->quote->random(strval($request->session()->has('unread_quotes')));
    } 

    /**
     * Return All Quotes that Match Search Term
     *
     * @param  Request $request
     * @return array
     */
    public function search(Request $request)
    {
        return $this->quote->search($request->query('q'));
    } 
}
