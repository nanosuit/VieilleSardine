<?php

namespace Test\HelloBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TestHelloBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
