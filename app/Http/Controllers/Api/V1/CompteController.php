<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

class CompteController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Not implemented'], 501);
    }

    public function store()
    {
        return response()->json(['message' => 'Not implemented'], 501);
    }

    public function show(string $id)
    {
        return response()->json(['message' => 'Not implemented', 'id' => $id], 501);
    }

    public function update(string $id)
    {
        return response()->json(['message' => 'Not implemented', 'id' => $id], 501);
    }

    public function destroy(string $id)
    {
        return response()->json(['message' => 'Not implemented', 'id' => $id], 501);
    }

    public function bloquer(string $compte)
    {
        return response()->json(['message' => 'Not implemented', 'compte' => $compte], 501);
    }

    public function debloquer(string $compte)
    {
        return response()->json(['message' => 'Not implemented', 'compte' => $compte], 501);
    }
}
