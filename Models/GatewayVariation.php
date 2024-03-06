<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GatewayVariation extends Model
{
    use HasFactory;

    public function Gateway()
    {
        return $this->belongsTo(Gateway::class);
    }

    public function GatewayVariationValues()
    {
        return $this->hasMany(GatewayVariationValue::class);
    }
}
