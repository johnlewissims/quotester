<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Quote;

class QuoteController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function getQuotes()
    {
        return (new Quote())->getQuotes();
    } 

    public function setQuotes()
    {
        $replacements = 
        [
            6 => [
                "author" => "Mark Gibbs",
                "quote" => "No matter how slick the demo is in rehearsal, when you do it in front of a live audience, the probability of a flawless presentation is inversely proportional to the number of people watching, raised to the power of the amount of money involved.",
            ]            
        ];

        return (new Quote())->setQuotes($replacements);
    }
}
