<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'x' => 'required|integer',
            'y' => 'required|integer'
        ]);

        Block::create($data);

        return response()->json(['message' => 'Block data saved successfully'], 200);
    }
}