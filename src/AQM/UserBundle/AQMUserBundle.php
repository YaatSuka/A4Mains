<?php

namespace AQM\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AQMUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
