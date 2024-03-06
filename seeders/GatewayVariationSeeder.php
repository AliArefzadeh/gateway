<?php

namespace Database\Seeders;

use App\Models\Gateway;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GatewayVariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gateways = Gateway::all();
        $gatewayVariations=[
            'zarinpal' => [
                'merchant-id'  ,
                'type'         ,
                'callback-url' ,
                'server'       ,
                'email'        ,
                'mobile'       ,
                'description'  ,],

            //--------------------------------
            // Mellat gateway
            //--------------------------------
            'mellat' => [
                'username',
                'password',
                'terminalId',
                'callback-url'
            ],

            //--------------------------------
            // Saman gateway
            //--------------------------------
            'saman' => [
                'merchant' ,
                'password' ,
                'callback-url',
            ],

            //--------------------------------
            // PayIr gateway
            //--------------------------------
            'payir' => [
                'api',
                'callback-url'
            ],

            //--------------------------------
            // IranKish gateway
            //--------------------------------
            'irankish' => [
                'merchantId' ,
                'sha1key',
                'callback-url'
            ],

            //--------------------------------
            // Sadad gateway
            //--------------------------------
            'sadad' => [
                'merchant',
                'transactionKey',
                'terminalId',
                'callback-url'
            ],

            //--------------------------------
            // Parsian gateway
            //--------------------------------
            'parsian' => [
                'pin',
                'callback-url'
            ],
            //--------------------------------
            // Pasargad gateway
            //--------------------------------
            'pasargad' => [
                'terminalId' ,
                'merchantId',
                'certificate-path',
                'callback-url'
            ],

            //--------------------------------
            // Asan Pardakht gateway
            //--------------------------------
            'asanpardakht' => [
                'merchantId',
                'merchantConfigId',
                'username',
                'password',
                'key',
                'iv',
                'callback-url',
            ],

            //--------------------------------
            // Paypal gateway
            //--------------------------------

        ];



        foreach ($gateways as $gateway) {
            foreach ($gatewayVariations as $gatewayVariation=>$keys) {
                if ($gateway->name == $gatewayVariation) {
                    dump($gateway->name);
                    foreach ($keys as $value) {
                        $gateway->GatewayVariations()->create([
                            'name' => $value,
                        ]);
                    }
                }
            }
        }


    }
}
