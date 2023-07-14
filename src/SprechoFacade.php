<?php

namespace Spr\Sprecho;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spr\Sprecho\Skeleton\SkeletonClass
 */
class SprechoFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sprecho';
    }
}
