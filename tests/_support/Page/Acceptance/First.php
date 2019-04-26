<?php
namespace Page\Acceptance;

class First
{
    // include url of current page
    public static $URL = '/log-in';
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     *
     *
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */
    public static $usernameField = '//input[@id="usernameOrEmail"]';
    public static $passwordField ='//input[@id="password"]';
    public static $link1='//div[@class="wp-login__links"]//a[2]';
    public static $link2='//div[@class="wp-login__links"]//a[1]';
    public static $link3='//div[@class="wp-login__links"]//a[3]';
    public static $link4='//div[@class="wp-login__links"]//a[4]';
    public static $link5='//span[@class="social-buttons__service-name"]';

}
