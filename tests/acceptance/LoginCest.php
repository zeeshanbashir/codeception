<?php

namespace Tajawal\Test;

use AcceptanceTester as AT;

/**
 * Class LoginCest
 *
 * @package Tajawal\Test
 */
class LoginCest
{

    /**
     * This function to test search
     *
     * @param \AcceptanceTester $I
     */
    public function searchInGoogle(AT $I)
    {
        $I->wantTo('perform actions and see result');
        $I->amOnPage('/');
        $I->seeInTitle('Google');
        $I->fillField('q', 'tajawal');
        $I->click('btnG');
        $text = 'tajawal';
        $I->canSee($text);
        // here you can add more assertion
    }
}