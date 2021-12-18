<?php
namespace App\Controllers;

use App\Number;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    
    public function index()
    {
        $number = $this->app->old('number');
        $name = $this->app->old('name');
        $guess = $this->app->old('guess');
        $tries = $this->app->old('tries');
        $outcome = $this->app->old('outcome');
        $gamenumber = $this->app->old('gamenumber');
        
        return $this->app->view('/index', [
            'number' => $number,
            'name' => $name,
            'guess' => $guess,
            'tries' => $tries,
            'outcome'=> $outcome ,
            'gamenumber' => $gamenumber
        ]);
    }

    public function reprocess()
    {
        $name = $this->app->input('name');
        $number = $this->app->input('number');
        $tries = $this->app->input('tries');
        $guess = $this->app->input('guess') ;
        $possibleOutcome = [
            'You guessed the number! It took you ' . $tries . ' tries.',
            'Guess higher',
            'Guess Lower'
        ];
        //$status = 'lost';
        
        if ($number == $guess) {
            $outcome = $possibleOutcome[0];
            //$status = 'won';
            $finaltries = $tries;
            $this->app->db()->insert('rounds', [
                'name'=>$name,
                'tries' =>$finaltries,
                'timestamp' => date('Y-m-d H:i:s'),
                'number'=> $number
            ]);
        } elseif ($guess > $number) {
            $outcome = $possibleOutcome[2];
            $tries += 1;
        } else {
            $outcome = $possibleOutcome[1];
            $tries +=1;
        };

        
        return $this->app->redirect('/', [
            'number' => $number,
            'guess' => $guess,
            'tries' => $tries,
            'outcome' => $outcome,
            'name' => $name,
            //'status' => $status
        ]);
    }

    public function process()
    {
        $this->app->validate([
            'name' => 'required',
            'guess' => 'required'
        ]);

        
        $name = $this->app->input('name');
        $guess = $this->app->input('guess');
        $tries = 0;
        $number = rand(1, 100);
        $possibleOutcome = [
            'You guessed the number! It took you' . $tries . 'tries.',
            'Guess higher',
            'Guess Lower'
        ];
        //$status = 'lost';
        $guess = intval($guess);
       
        
        if ($number == $guess) {
            $outcome = $possibleOutcome[0];
        //$status = 'won';
        } elseif ($guess > $number) {
            $outcome = $possibleOutcome[2];
            $tries += 1;
        } else {
            $outcome = $possibleOutcome[1];
            $tries +=1;
        }
        
        return $this->app->redirect('/', [
            'number' => $number,
            'name' => $name,
            'guess' => $guess,
            'tries' => $tries,
            'outcome' => $outcome,
            //'status' => $status
        ]);
    }
    public function history()
    {
        $rounds = $this->app->db()->all('rounds');
        return $this->app->view('history', ['rounds' => $rounds]);
    }

    public function round()
    {
        $id = $this->app->param('id');
        $round = $this->app->db()->findById('rounds', $id);
        
        return $this->app->view('round', ['round'=>$round]);
    }
}