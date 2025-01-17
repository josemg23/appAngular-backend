<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => true,
            'message' => "Product Created successfully!",
            'product' => json_encode(Position::all()),
        ], 200);
    }

}
