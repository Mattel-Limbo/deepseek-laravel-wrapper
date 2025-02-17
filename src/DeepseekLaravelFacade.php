<?php

declare(strict_types=1);

namespace MattelLimbo\DeepseekLaravel;

use Illuminate\Support\Facades\Facade;

final class DeepseekLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'deepseek-laravel';
    }
}
