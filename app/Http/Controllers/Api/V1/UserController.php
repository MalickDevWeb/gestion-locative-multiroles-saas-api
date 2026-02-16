<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

class UserController extends Controller
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
}
