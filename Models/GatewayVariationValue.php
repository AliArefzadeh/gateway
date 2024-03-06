<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GatewayVariationValue extends Model
{
    use HasFactory;

    public function GatewayVariation()
    {
        return $this->belongsTo(GatewayVariation::class);
    }
}
