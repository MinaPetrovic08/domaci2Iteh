<?php

namespace App\Http\Controllers;

use App\Models\Clanak;
use Illuminate\Http\Request;

class UserClanakController extends Controller
{
    public function index($user_id)
    {
        $clanak = Clanak::get()->where('user_id', $user_id);
        if (is_null($clanak))
            return response()->json('Data not found', 404);
        return response()->json($clanak);
    }
}
