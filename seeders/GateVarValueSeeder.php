<?php

namespace Database\Seeders;

use App\Models\Gateway;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GateVarValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gateway=Gateway::find(2);
        foreach ($gateway->GatewayVariations as $gatewayVariation) {
            $gatewayVariation->GatewayVariationValues()->create([
                'value' => 'AliAref',
            ]);


        }
    }
}
