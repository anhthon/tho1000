<?php 
use Step\Acceptance\First as FirstStep;
class FirstCest
{
    public function tryToTest(FirstStep $I)
    {
        $I->checkusernameExist();
    }

}
