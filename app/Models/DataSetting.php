<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Joy\VoyagerCrm\Models\Traits\Uuids;
use Joy\VoyagerDataSettings\Events\DataSettingUpdated;
use Joy\VoyagerDataSettings\Models\DataSetting as ModelsDataSetting;
use TCG\Voyager\Facades\Voyager;

class DataSetting extends ModelsDataSetting
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
