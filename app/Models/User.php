<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Joy\VoyagerCrm\Models\Traits\CreatedModifiedBy;
use Joy\VoyagerCrm\Models\Traits\Uuids;
use Joy\VoyagerCrm\Models\User as CrmUser;
use Lab404\Impersonate\Models\Impersonate;
use Laravel\Passport\HasApiTokens;

class User extends CrmUser
{
    use HasApiTokens, HasFactory, Notifiable, Impersonate;

    /**
     * @return bool
     */
    public function canImpersonate()
    {
        return $this->hasRole('admin');
    }

    /**
     * @return bool
     */
    public function canBeImpersonated()
    {
        return !$this->hasRole('admin');
    }
}
