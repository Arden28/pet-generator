<?php

namespace Arden28\PetGenerator;

use Illuminate\Support\Facades\Http;

class Pet{

    public function cat() {
        $response = Http::withHeaders([
            'x-api-key' => 'live_zi59OGBL2sLhoWx0eiUyAiGktcZFi82mmQaDobPcfvn6JEt56vOC9PSPVvwIFNvM'
        ])->get('https://api.thecatapi.com/v1/images/search', [
            'limit' => 10
        ]);

        return $response;
    }
}
