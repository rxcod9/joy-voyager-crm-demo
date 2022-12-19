<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Joy\VoyagerCrm\Models\Traits\Uuids;
use Joy\VoyagerUserSettings\Events\UserSettingUpdated;
use Joy\VoyagerUserSettings\Models\UserSetting as ModelsUserSetting;
use TCG\Voyager\Facades\Voyager;

class UserSetting extends ModelsUserSetting
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
