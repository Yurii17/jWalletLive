<?php

use Page\jWalletLive as Page;


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    public $user = ['email' => 'test4@test.jwallet', 'password' => 'Pw84584df5'];

    public function setOfActions2($link)
    {
        $I = $this;
        $I->wait(3);
        $I->click($link['el']);
        $I->wait(3);
        $I->seeInCurrentUrl($link['url']);
        $I->click(page::$Logo);
    }

    /**
     * @param $email
     * @param $password
     * @throws Exception
     */
    public function Login($email, $password)
    {
        $I = $this;
        /*
        if ($I->loadSessionSnapshot('login'))  {
            $I->grabCookie('auth._token.local');
            return;
        }
        */
        $I->click(page::$LoginBtn);
        $I->waitForElementVisible(page::$LoginEmail, 100);
        $I->fillField(page::$LoginEmail, $email);
        $I->fillField(page::$LoginPassword, $password);
        $I->click(page::$LoginBtnModal);
        $I->wait(5);
        /*$I->saveSessionSnapshot('login');
        $I->grabCookie('auth._token.local');
        */
    }



}
