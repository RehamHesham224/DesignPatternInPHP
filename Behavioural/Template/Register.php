<?php

namespace Behavioural\Template;

class Register extends Page
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
        return "<body>Register Form</body>";
    }

    public function getPageFooter(): string
    {
        return ">";
    }

}