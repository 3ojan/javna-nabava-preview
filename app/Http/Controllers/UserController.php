<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
public function showEntries($username)
{
    // Map the username to the correct user ID
    $userMapping = [
        'some-username' => 285,
        // Add more mappings if needed
        // 'another-username' => 71,
        'all' => 'all', // Add this to recognize the 'all' keyword
    ];

    $userId = $userMapping[$username] ?? null;

    if (!$userId) {
        return response()->json(['error' => 'User not found'], 404);
    }

    $query = DB::table('entries');

    // Conditionally add the where clause if userId is not 'all'
    if ($userId !== 'all') {
        $query->where('external_id', $userId);
    }

    $entries = $query->get();

    return response()->json($entries);
}
}
