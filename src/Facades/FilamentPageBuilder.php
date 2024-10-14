<?php

namespace Emamalias\FilamentPageBuilder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Emamalias\FilamentPageBuilder\FilamentPageBuilder
 */
class FilamentPageBuilder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Emamalias\FilamentPageBuilder\FilamentPageBuilder::class;
    }
}
