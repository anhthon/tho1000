<?php
namespace Step\Acceptance;
use Page\Acceptance\First as FirstPage;
class First extends \AcceptanceTester
{
    /**
     * check username field exist on login page
     */
   public function checkusernameExist()
   {
       $I = $this;
       $I->wantToTest('go to log in page');
       $I->amOnPage(FirstPage::$URL);
       $I->wantToTest('want to check username exist on login page');
       $I->waitForElementVisible(FirstPage::$usernameField, 3);


   }
   /**
    *want to enter valid email address and valid password
    */
   public function enterusernamepassword()
   {
       $I = $this;
       $I->amOnPage(FirstPage::$URL);
       $I->fillField('//input[@id="usernameOrEmail"]','nguyendamanhtho@gmail.com');
       $I->click('Continue');
       $I->wait(3);

       $I->fillField('//input[@id="password"]','0355267219tho');
       $I->click('Log In');
       $I->wait(3);

   }

    /**
     *want to enter valid email address and invalid password
     */
   public function enterinvalidpassword()
   {
       $I = $this;
       $I->amOnPage(FirstPage::$URL);
       $I->fillField('//input[@id="usernameOrEmail"]','nguyendamanhtho@gmail.com');
       $I->click('Continue');
       $I->wait(3);

       $I->fillField('//input[@id="password"]','0355267219');
       $I->click('Log In');
       $I->wait(3);
   }
   /**
    * want to enter invalid email address
    */
   public function enterinvalidemail()
   {
       $I = $this;
       $I->amOnPage(FirstPage::$URL);
       $I->fillField('//input[@id="usernameOrEmail"]','nguyendam@gmail.com');
       $I->click('Continue');
       $I->wait(2);


   }
   /**
    * want to click "email me a login link" hyperlink success
    */
    public function clicklink1()
    {
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link1, 5 );//$link1 is xpath of"email me a login link" hyperlink
        $I->click(FirstPage::$link1);

    }
    /**
     * want to click "Create a new account" hyperlink success
     */
    public function clicklink2()
    {
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link2, 5);//$link2 is xpath of"Create a new account" hyperlink
        $I->click(FirstPage::$link2);
    }
    /**
     * want to click "Lost your password?" hyperlink success
     */
    public function clicklink3()
    {
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link3, 5);//$link3 is xpath of"Lost your password?" hyperlink
        $I->click(FirstPage::$link3);
    }
    /**
     * want to click "Back to WordPress.com" hyperlink susscess
     */
    public function clicklink4()
    {
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link4, 5);//$link4 is xpath of"Back to WordPress.com" hyperlink
        $I->click(FirstPage::$link4);

    }
    /**
     * verify if a user can login with [an email or username] which includes special characters
     */
    public function enterspecialcharacters()
    {
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->fillField('//input[@id="usernameOrEmail"]','!@$@#%$^#$$##%');
        $I->click('Continue');
        $I->wait(5);

    }
    /**
     * want to click button "Continue with Google" when login in google.
     */
    public function clickGoogle()
    {
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->waitForElementVisible(FirstPage::$link5, 10);//$link5 is xpath of"Continue with Google" hyperlink
        $I->click(FirstPage::$link5);
    }
    /**
     * email is blank
     */
    public function emailblank()
    {
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->fillField('//input[@id="usernameOrEmail"]','');
        $I->click('Continue');
        $I->wait(5);
    }

    /**
     * password is blank
     */
    public function passwordblank()
    {
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->fillField('//input[@id="usernameOrEmail"]','nguyendamanhtho@gmail.com');
        $I->click('Continue');
        $I->wait(5);
        $I->fillField('//input[@id="password"]','');
        $I->click('Log In');
        $I->wait(5);

    }
    /**
     * want to login two tabs on time
     */
    public function logintwotabs()
    {
        $I = $this;
        $I->amOnPage(FirstPage::$URL);
        $I->openNewTab();
        $I->amOnPage(FirstPage::$URL);
        $I->fillField('//input[@id="usernameOrEmail"]','nguyendamanhtho@gmail.com');
        $I->click('Continue');
        $I->wait(5);
        $I->fillField('//input[@id="password"]','0355267219tho');
        $I->click('Log In');
        $I->wait(5);
        $I->closeTab();

    }


}



