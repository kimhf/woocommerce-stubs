<?php

return \StubsGenerator\Finder::create()
    ->in(['wp-content/plugins/woocommerce/includes'])
    ->append(['wp-content/plugins/woocommerce/woocommerce.php'])
    ->sortByName();
