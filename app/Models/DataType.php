<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Joy\VoyagerCrm\Models\Traits\Uuids;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Database\Schema\SchemaManager;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\DataType as ModelsDataType;
use TCG\Voyager\Traits\Translatable;

class DataType extends ModelsDataType
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
