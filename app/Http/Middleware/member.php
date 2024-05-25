<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class member
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Panggil metode untuk memperbarui aktivitas pengguna
        $this->updateUserActivity();

        return $next($request);
    }

    /**
     * Update user activity
     */
    public function updateUserActivity()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user instanceof \App\Models\User) {
                $user->last_active = Carbon::now();
                $user->save();
            }
        }
    }
}
