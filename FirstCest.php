<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToLogin(AcceptanceTester $I)
    {
		$I->amOnPage('/home');
		$I->waitForText('Войти');
        $I->click('body button:nth-child(3)');
		//$I->click('body button:nth-child(4)');
		$I->waitForText('Вход');
		if ($I->seeElement('body button:nth-child(4)')) {
            $I->click('body button:nth-child(4)');
        };
		$I->fillField('input[name=email]', 'aset060199@mail.ru');
		$I->fillField('input[name=password]', 'Killer060199@');
		$I->click('button[type=submit]');
		$I->wait(10);
    }
}
