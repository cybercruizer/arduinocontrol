<?php

namespace App\Models;

use App\Models\Sensor;
use App\Models\SwitchModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_name',
        'user_id',
        'device_key',
        'device_status',
    ];
    /**
     * Get all of the switches for the Device
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function switches(): HasMany
    {
        return $this->hasMany(SwitchModel::class);
    }
    /**
     * Get all of the sensors for the Device
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sensors(): HasMany
    {
        return $this->hasMany(Sensor::class);
    }
}
