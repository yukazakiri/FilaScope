<?php

namespace Yukazakiri\FilaScope\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Yukazakiri\FilaScope\FilaScope
 */
class FilaScope extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Yukazakiri\FilaScope\FilaScope::class;
    }
}
