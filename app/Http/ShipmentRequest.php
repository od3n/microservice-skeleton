<?php

declare(strict_types=1);

namespace MyParcelCom\Microservice\Http;

class ShipmentRequest extends FormRequest
{
    /**
     * Define callback functions to apply to the request data.
     * The original values will be overwritten by the callbacks.
     * By default all spaces will be removed from phone numbers.
     *
     * @return array
     */
    protected function sanitization(): array
    {
        $stripSpaces = function ($value) {
            return str_replace(' ', '', $value);
        };

        return [
            'data.attributes.recipient_address.phone_number'       => $stripSpaces,
            'data.attributes.return_address.phone_number'          => $stripSpaces,
            'data.attributes.sender_address.phone_number'          => $stripSpaces,
            'data.attributes.pickup_location.address.phone_number' => $stripSpaces,
        ];
    }

    /**
     * Define the validation rules that apply to the request.
     * For example: [
     *   'data.attributes.description                   => 'required|string',
     *   'data.attributes.physical_properties.weight'   => 'integer|min:1000',
     * ]
     * This will enforce the description attribute to be set and to be a string
     * and that the weight of the shipment is an integer and is at least 1000.
     *
     * See the laravel documentation for all available validation rules:
     * https://laravel.com/docs/5.5/validation#available-validation-rules
     *
     * @return array
     */
    protected function shipmentRules(): array
    {
        return [
            // TODO: Create rules based on carrier specific requirements.
        ];
    }
}
