<?php

use Page\jWalletLive as Page;
use \Facebook\WebDriver\WebDriverElement;

class jWalletLiveCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldjWallet (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$jWallet);
        $I->wait(2);
        $I->fillField(page::$jWalletField, 100);
        $price = $I->grabValueFrom(page::$jWalletField);
        $calculated = $I->grabValueFrom(page::$jWalletField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldPayPal (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$PayPal);
        $I->wait(2);
        $I->fillField(page::$PayPalField, 100);
        $price = $I->grabValueFrom(page::$PayPalField);
        $calculated = $I->grabValueFrom(page::$PayPalField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldEXMO (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$EXMO);
        $I->wait(2);
        $I->fillField(page::$EXMOField, 100);
        $price = $I->grabValueFrom(page::$EXMOField);
        $calculated = $I->grabValueFrom(page::$EXMOFiled2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }

    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldLiveCoin (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$LiveCoin);
        $I->wait(2);
        $I->fillField(page::$LiveCoinField, 100);
        $price = $I->grabValueFrom(page::$LiveCoinField);
        $calculated = $I->grabValueFrom(page::$LiveCoinField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function WireTransferModal (AcceptanceTester $I)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$WireTransfer);
        $I->wait(3);
        $I->seeElement(page::$WireTransferModal);
        $I->click(page::$WireTransferModalClose);
        $I->click(page::$EXIT);
        $I->wait(4);
    }

    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldBitCoin (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$BitCoin);
        $I->wait(2);
        $I->fillField(page::$BitCoinField, 100);
        $price = $I->grabValueFrom(page::$BitCoinField);
        $calculated = $I->grabValueFrom(page::$BitCoinFiled2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }

    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldLiteCoin (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$LiteCoin);
        $I->wait(2);
        $I->fillField(page::$LiteCoinField, 100);
        $price = $I->grabValueFrom(page::$LiteCoinField);
        $calculated = $I->grabValueFrom(page::$LiteCoinField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldDash (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$Dash);
        $I->wait(2);
        $I->fillField(page::$DashField, 100);
        $price = $I->grabValueFrom(page::$DashField);
        $calculated = $I->grabValueFrom(page::$DashField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldEth (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$Eth);
        $I->wait(2);
        $I->fillField(page::$EthField, 100);
        $price = $I->grabValueFrom(page::$EthField);
        $calculated = $I->grabValueFrom(page::$EthField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldPaxum (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$Paxum);
        $I->wait(2);
        $I->fillField(page::$PaxumField, 100);
        $price = $I->grabValueFrom(page::$PaxumField);
        $calculated = $I->grabValueFrom(page::$PaxumField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldADV (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$Adv);
        $I->wait(2);
        $I->fillField(page::$AdvField, 100);
        $price = $I->grabValueFrom(page::$AdvField);
        $calculated = $I->grabValueFrom(page::$AdvField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldCapitalist (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$Capitalist);
        $I->wait(2);
        $I->fillField(page::$CapitalistField, 100);
        $price = $I->grabValueFrom(page::$CapitalistField);
        $calculated = $I->grabValueFrom(page::$CapitalistField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldWebMoney (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$WebMoney);
        $I->wait(2);
        $I->fillField(page::$WebMoneyField, 100);
        $price = $I->grabValueFrom(page::$WebMoneyField);
        $calculated = $I->grabValueFrom(page::$WebMoneyField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldEpayments (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$EPM);
        $I->wait(2);
        $I->fillField(page::$EPMField, 100);
        $price = $I->grabValueFrom(page::$EPMField);
        $calculated = $I->grabValueFrom(page::$EPMField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldPerfectMoney (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$PerfectMoney);
        $I->wait(2);
        $I->fillField(page::$PerfectMoneyField, 100);
        $price = $I->grabValueFrom(page::$PerfectMoneyField);
        $calculated = $I->grabValueFrom(page::$PerfectMoneyField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldPerfectMoney2 (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$PerfectMoney2);
        $I->wait(2);
        $I->fillField(page::$PerfectMoney2Field, 100);
        $price = $I->grabValueFrom(page::$PerfectMoney2Field);
        $calculated = $I->grabValueFrom(page::$PerfectMoney2Field2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldYandex (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$YandexMoney);
        $I->wait(2);
        $I->fillField(page::$YandexMoneyField, 100);
        $price = $I->grabValueFrom(page::$YandexMoneyField);
        $calculated = $I->grabValueFrom(page::$YandexMoneyField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldQiwi (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$Qiwi);
        $I->wait(2);
        $I->fillField(page::$QiwiField, 100);
        $price = $I->grabValueFrom(page::$QiwiField);
        $calculated = $I->grabValueFrom(page::$QiwiField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldRUB (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$RUB);
        $I->wait(2);
        $I->fillField(page::$RUBField, 100);
        $price = $I->grabValueFrom(page::$RUBField);
        $calculated = $I->grabValueFrom(page::$RUBField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldRUB2 (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$RUB2);
        $I->wait(2);
        $I->fillField(page::$RUB2Field, 100);
        $price = $I->grabValueFrom(page::$RUB2Field);
        $calculated = $I->grabValueFrom(page::$RUB2Field2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }
    /**
     * @param AcceptanceTester $I
     * @param \Codeception\Scenario $scenario
     * @return bool
     * @throws Exception
     */
    public function FieldUAH (AcceptanceTester $I, \Codeception\Scenario $scenario)
    {
        $I->Login($I->user['email'], $I->user['password']);
        $I->click(page::$MoneyTransactionLink);
        $I->wait(3);
        $I->click(page::$UAH);
        $I->wait(2);
        $I->fillField(page::$UAHField, 100);
        $price = $I->grabValueFrom(page::$UAHField);
        $calculated = $I->grabValueFrom(page::$UAHField2);
        $I->assertNotSame($price, $calculated);
        $I->click(page::$EXIT);
        is_null($calculated) ? $scenario->skip("Calculated value is: $calculated") : true;
    }























































}
