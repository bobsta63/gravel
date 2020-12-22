<?php

namespace Ballen\Gravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * GravelMapper
 *
 * Gravatar Mapper provides a binding/class method aliases for Laravel to provide friendly syntax.
 *
 * @author Bobby Allen <ballen@bobbyallen.me>
 * @license http://opensource.org/licenses/MIT
 * @link https://github.com/allebb/gravel
 * @link http://www.bobbyallen.me
 *
 */
class Gravatar extends Facade
{

    /**
     * @codeCoverageIgnore
     */
    protected static function getFacadeAccessor()
    {
        return 'gravatar';
    }
}
