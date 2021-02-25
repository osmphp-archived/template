<?php

declare(strict_types=1);

namespace My\Tests;

use My\FirstModule\Module;
use My\Samples\App;
use Osm\Runtime\Apps;
use PHPUnit\Framework\TestCase;

class test_01_first_module extends TestCase
{
    public function test_arguments_and_options() {
        Apps::run(Apps::create(App::class), function(App $app) {
            // GIVEN a compiled sample app

            // WHEN you check the module list
            $modules = $app->modules;

            // THEN its output is fetched
            $this->assertArrayHasKey(Module::class, $modules);
        });
    }
}