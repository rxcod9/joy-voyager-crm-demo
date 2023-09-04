<?php

namespace App\Models;

use Database\Factories\SampleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Joy\VoyagerCrm\Models\Traits\Uuids;
use Joy\VoyagerCrm\Models\Traits\CreatedModifiedBy;
use Joy\VoyagerBreadSample\Models\Sample as ModelsSample;

class Sample extends ModelsSample
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
        return SampleFactory::new();
    }

    public function getCoordinatesAttribute($value)
    {
        if (Str::contains($value, 'POINT')) {
            return $value;
        }
        return $value && !Str::contains($value, 'POINT') ? json_encode($this->getCoordinates()) : $value;
    }
}
