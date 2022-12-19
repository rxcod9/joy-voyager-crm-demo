<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Joy\VoyagerCrm\Models\Traits\Uuids;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Events\MenuDisplay;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Menu as ModelsMenu;

/**
 * @todo: Refactor this class by using something like MenuBuilder Helper.
 */
class Menu extends ModelsMenu
{
    use Uuids;

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
}
