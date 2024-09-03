<?php

namespace Arden28\PetGenerator;

use Illuminate\Support\Facades\Http;

class Pet{

    public function cat() {
        $response = Http::get('https://api.thecatapi.com/v1/images/search?limit=10', [
            'limit' => 10
        ]);

        return $response;
    }
}
