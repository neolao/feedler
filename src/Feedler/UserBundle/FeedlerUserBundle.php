<?php

namespace Feedler\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FeedlerUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
