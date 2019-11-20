<?php

return \StubsGenerator\Finder::create()
    ->in([
        'wp-content/plugins/woocommerce/includes',
        // 'wp-content/plugins/woocommerce/packages/*/src', TODO Put packages into separate stubs files.
    ])
    ->append(\StubsGenerator\Finder::create()->files()->depth('< 1')->name('woocommerce.php')->in(['woocommerce']))
    ->sortByName();
