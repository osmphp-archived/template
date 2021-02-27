<?php

declare(strict_types=1);

namespace My\FirstModule;

use Osm\Core\BaseModule;

class Module extends BaseModule
{
    public static ?string $app_class_name = \My\App::class;
}