<?php

namespace App\Models;

use Database\Factories\NotificationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Joy\VoyagerCrm\Models\Traits\Uuids;
use Joy\VoyagerCrm\Models\Traits\CreatedModifiedBy;
use Joy\VoyagerBreadNotification\Models\Notification as ModelsNotification;

class Notification extends ModelsNotification
{
    use SoftDeletes;
    use Uuids;
    use CreatedModifiedBy;
    use HasFactory;

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

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return NotificationFactory::new();
    }
}
