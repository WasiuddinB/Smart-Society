<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Organization;

class MapController extends Controller
{
    public function index()
    {
        $blocks = $this->generateBlocks();

        return view('map', ['blocks' => $blocks]);

    }
    private function generateBlocks()
{
    $blocks = [];

    // for ($y = 0; $y < 10; $y++) {
    //     for ($x = 0; $x < 10; $x++) {
    //         if ($x < 5 && $y < 5) {
    //             $blocks[$y][$x] = null;
    //         } else {
    //             $blocks[$y][$x] = 'empty';
    //         }
    //     }
    // }

    return $blocks;
}
public function createOrganization(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'x' => 'required|integer',
        'y' => 'required|integer',
    ]);

    $organization = new Organization();
    $organization->name = $data['name'];
    $organization->x = $data['x'];
    $organization->y = $data['y'];
    $organization->save();

    return response()->json(['message' => 'Organization created successfully']);
}

    


    
}