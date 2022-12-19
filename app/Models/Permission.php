<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Joy\VoyagerCrm\Models\Traits\Uuids;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Permission as ModelsPermission;

class Permission extends ModelsPermission
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
