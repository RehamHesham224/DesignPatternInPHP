<?php

namespace Behavioural\Template;

class NotFound extends Page
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
        return "<body>404 NotFound</body>";
    }

    public function getPageFooter(): string
    {
        return ">";
    }

}