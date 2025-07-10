<?php

namespace App\Http\Controllers;

use App\Models\Tier;
use App\Models\User;
use App\Models\QuizAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $title = 'Dashboard';
        $active = 'dashboard';

        // Teruskan data quizAttempts ke view
        return view('users.dashboard', compact('active', 'title'));
    }

    public function profile(User $user)
    {
        $title = 'Profile';
        $active = 'profile';
        return view('users.profile', compact('active', 'title', 'user'));
    }
}