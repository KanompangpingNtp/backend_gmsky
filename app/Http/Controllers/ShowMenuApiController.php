<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EachAgencySystem;

class ShowMenuApiController extends Controller
{
    //
    public function showMenuAPI()
    {
        $EachAgencySystem = EachAgencySystem::with('menuTypes')->find(1);

        return response()->json($EachAgencySystem);
    }

    // public function showMenuAPI()
    // {
    //     $EachAgencySystem = EachAgencySystem::with('menuTypes')
    //         ->where('id', 1)
    //         ->first();

    //     return response()->json($EachAgencySystem);
    // }
}
