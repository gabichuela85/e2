<?php

class P3Cest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');

        $I->fillField('[test=name-field]', 'Gaby');
        $I->fillField('[test=guess-field]', '45');
        $I->click('[test=submit-buton]');
        $I->seeElement('[test=second-guess]');
        
        $outcome = $I->grabTextFrom('[test=game-outcome]');
        $I->comment('The outcome was: ' .$outcome);

        /*if ($outcome == 'Guess higher') {
            $I
        }
        */
    }
}