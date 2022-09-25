<?php

namespace Behavioural\Template;

class Login extends Page
{
    public function getPageHeader(): string
    {
        return "<header>Load CSS & JS</header>";
    }

    public function getPageNav(): string
    {
        return "";
    }

    public function getPageBody(): string
    {
        return "<body>Login Form</body>";
    }

    public function getPageFooter(): string
    {
        return ">";
    }
}