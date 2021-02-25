<?php

declare(strict_types=1);

use My\Samples\App;
use Osm\Runtime\Apps;

require 'vendor/autoload.php';

Apps::$project_path = dirname(__DIR__);
Apps::run(Apps::create(App::class), function (App $app) {
    echo "My application modules:\n\n";

    foreach ($app->modules as $module) {
        echo "{$module->class_name}\n";
    }
});
