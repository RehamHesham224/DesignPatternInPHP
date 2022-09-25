<?php

namespace Tests;

use Behavioural\Template\Home;
use Behavioural\Template\Login;
use Behavioural\Template\NotFound;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testCanRenderHomePage(){
        $homePage = new Home();
        $renderHomePage=$homePage->renderPage();
        self::assertStringContainsString('<body>Body</body>',$renderHomePage);
        self::assertStringNotContainsString('<body>404 NotFound</body>',$renderHomePage);
    }
    public function testCanRenderLoginPage(){
        $loginPage = new Login();
        $renderLoginPage=$loginPage->renderPage();
        self::assertStringContainsString('<body>Login Form</body>',$renderLoginPage);
        self::assertStringNotContainsString('<body>404 NotFound</body>',$renderLoginPage);
    }
    public function testCanRenderNotFoundPage(){
        $NotFoundPage = new NotFound();
        $renderNotFoundPage=$NotFoundPage->renderPage();
        self::assertStringNotContainsString('<body>Login Form</body>',$renderNotFoundPage);
        self::assertStringContainsString('<body>404 NotFound</body>',$renderNotFoundPage);
    }
}