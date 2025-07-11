<?php

namespace App\Http\Controllers;

use App\Models\UKM;
use App\Models\Post;
use App\Models\User;
use App\Models\Division;
use App\Models\Departement;
use App\Models\AnggotaDepartement;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $title = 'Dashboard';
        $active = 'dashboard';
        $dema = Auth::user();
        $divisions = Division::where('user_id', $dema->id)->get();
        $ukms = UKM::where('user_id', $dema->id)->get();
        $posts = Post::where('user_id', $dema->id)->get();
        $departements = Departement::where('user_id', $dema->id)->get();
        $anggota_departements = AnggotaDepartement::where('user_id', $dema->id)->get();

        // Teruskan data quizAttempts ke view
        return view('users.dashboard', compact('active', 'title', 'divisions', 'ukms', 'posts', 'departements', 'anggota_departements'));
    }

    public function profile(User $user)
    {
        $title = 'Profile';
        $active = 'profile';
        return view('users.profile', compact('active', 'title', 'user'));
    }
}