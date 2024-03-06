<?php

namespace Database\Seeders;

use App\Models\Gateway;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gateways = [
            "zarinpal"  , "mellat", "saman", "payir", "irankish", "sadad", "parsian", "pasargad", "asanpardakht"
        ];

        foreach ($gateways as $gateway) {
            Gateway::create(['name'=>$gateway]);

        }

    }
}
