<?php

return \StubsGenerator\Finder::create()
    ->in([
        'wp-content/plugins/woocommerce/woocommerce.php',
        'wp-content/plugins/woocommerce/includes',
        'wp-content/plugins/woocommerce/packages/*/src',
    ])
    ->sortByName();
