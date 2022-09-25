<?php

namespace Behavioural\Template;

class Home extends Page
{

    public function getPageHeader(): string
    {
        return "<header>Load CSS & JS</header>";
    }

    public function getPageNav(): string
    {
        return "<Nav>Nav LIst</Nav>";
    }

    public function getPageBody(): string
    {
        return "<body>Body</body>";
    }

    public function getPageFooter(): string
    {
        return "<Footer>Contact Us</Footer>";
    }
}