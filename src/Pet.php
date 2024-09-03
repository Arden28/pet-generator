<?php

namespace Arden28\PetGenerator;

use Illuminate\Support\Facades\Http;

class Pet{

    public function cat() {
        $response = Http::withHeaders([
            'x-api-key' => env('THE_CAT_API_KEY', 'default-api-key') // Fallback to 'default-api-key' if not set
        ])->get('https://api.thecatapi.com/v1/images/search', [
            'limit' => 10
        ]);

        return $response->json();
    }
}
