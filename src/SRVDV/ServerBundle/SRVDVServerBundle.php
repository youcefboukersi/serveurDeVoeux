<?php

namespace SRVDV\ServerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SRVDVServerBundle extends Bundle
{


    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
