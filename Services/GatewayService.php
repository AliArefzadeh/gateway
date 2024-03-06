<?php

namespace App\Services;

use App\Models\Gateway;

class GatewayService
{
    public $config=[];
    public $items=[];
    public $x = ['timezone' => 'Asia/Tehran'];





    public function Gates()
    {
        $this->items = Gateway::all();
        foreach ($this->items as $gateway) {

            $this->x += [$gateway->name => array()];

            foreach ($gateway->GatewayVariations as $gatewayVariation) {


                    foreach ($gatewayVariation->GatewayVariationValues as $value) {

                        $this->x[$gateway->name] += [$gatewayVariation->name => $value->value];


                } if ($gatewayVariation->GatewayVariationValues) {
                    $this->x[$gateway->name] += [$gatewayVariation->name => ''];
                }

            }

        }
        $this->x+=['table' => 'gateway_transactions',];

        $this->items=[
            'gateway' => $this->x,
        ];

        return collect($this->items);
    }
}


