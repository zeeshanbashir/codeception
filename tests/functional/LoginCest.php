<?php

namespace Tajawal\Test;

use FunctionalTester as FT;

class LoginCest
{
    // tests
    public function testLogin(FT $I)
    {
        $I->wantTo('login as a user');
        $I->haveRecord('users', [
            'email' =>  'test@user.com',
            'password' => 'password',
        ]);
        $I->amOnPage('/auth/login');
        $I->fillField('email', 'test@user.com');
        $I->fillField('password', 'password');
        $I->click('Login');
        $I->amOnPage('/');
        $I->seeAuthentication();
    }

    // Note: Functional tests only work with framework
}