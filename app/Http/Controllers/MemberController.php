<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function getOnlineUsers()
    {
        $usersOnline = User::where('last_active', '>=', Carbon::now()->subMinutes(1))->get();
        return view('dashboard.member', [
            'data' => $usersOnline,
        ]);
    }
}
