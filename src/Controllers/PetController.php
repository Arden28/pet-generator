<?php

namespace Arden28\PetGenerator\Controllers;

use Illuminate\Http\Request;
use Arden28\PetGenerator\Pet;

class PetController
{
    public function __invoke(Pet $pet) {
        $cats = $pet->cat();

        return view('pet-generator::index', compact('cats'));

    }
}
