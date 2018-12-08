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
     * @param AcceptanceTester $I
     * @throws Exception
     */
    public function Login(AcceptanceTester $I)
    {
        $I = $this;
        $I->click(page::$LoginBtn);
        $I->waitForElementVisible(page::$LoginEmail, 100);
        $I->fillField(page::$LoginEmail, 'test4@test.jwallet');
        $I->fillField(page::$LoginPassword, 'Pw84584df5');
        $I->click(page::$LoginBtnModal);
        $I->wait(5);
    }


}
