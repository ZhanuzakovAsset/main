<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class SecondCest
{
    public function _before(AcceptanceTester $I)
    {      
	    $I->maximizeWindow();
	    $I->amOnPage('/home');
		$I->waitForText('Войти');
        $I->click('body button:nth-child(3)');
		$I->waitForText('Вход');
		if ($I->seeElement('body button:nth-child(4)')) {
            $I->click('body button:nth-child(4)');
        };
		$I->fillField('input[name=email]', 'aset060199@mail.ru');
		$I->fillField('input[name=password]', 'Killer060199@');
		$I->click('button[type=submit]');
		$I->waitForText('Документы');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {   
		$I->click('nav button:nth-child(4)');		
		$I->waitForText('Информация');
        $I->click('main button:nth-child(2)');
		$I->waitForText('Настройки профиля');
		$I->click('a[href="/profile/edit"]');
		$I->waitForText('Сохранить');
		$I->fillField('input[name=sLastName]', 'Жанузаков');
		$I->fillField('input[name=sName]', 'Асет');
		$I->click('//button/span[text()="Сохранить"]');
		$I->wait(5);
    }
}
