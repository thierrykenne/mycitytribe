<?php

namespace City\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CityUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
