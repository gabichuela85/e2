<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];
        
        return $this->app->view('index', [
            'welcome' => $welcomes[array_rand($welcomes)]
        ]);
    }

    public function deal()
    {
        $cardNumbers = ['2'=>2, '3'=>3, '4'=>4, '5'=>5, '6'=>6, '7'=>7, '8'=>8, '9'=>9, '10'=>10, 'J'=>10, 'Q'=>10, 'K'=>10, 'A'=>11];
        $cardSuits = ['hearts', 'spades', 'diamonds', 'clubs'];
        $deck = [];

        /**  foreach ($cardNumbers as &$value) {
         *    $value = $value . $cardSuits[$value];
         *    $deck = [$value];
        *}
        */
        dump($cardNumbers);
        dump($cardSuits);
        dump($deck);

        foreach ($cardSuits as $cardSuit) {
            foreach ($cardNumbers as $key=>$value) {
                $card = $key . ' of ' . $cardSuit;
                $value = $value;
                $deck[$card] = $value;
            }
        }

        //function lifted from php.net documentation on how to shuffle an associate array. from ahmad at ahmadnassri dot com
        
        function shuffle_assoc(&$array)
        {
            $keys = array_keys($array);
            shuffle($keys);
            foreach ($keys as $key) {
                $new[$key]=$array[$key];
            }
            $array = $new;
            return $array;
        }
        $shuffledDeck = shuffle_assoc($deck);
        dump($shuffledDeck);
    }
}