<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class authController extends Controller
{
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Find user by email
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password) || $user->delUser==1) {
            return redirect('/login');
        }

        // Create session or token (optional)
        Auth::login($user);
        switch (Auth::user()->role_id) {
            case 1:
                return redirect('/admin');
                case 2:
                    return redirect('/coach');
                    case 3:
                    return redirect('/');
            
            default:
                return redirect('/');
        }

       
    }
    public function login_()
    {
        return view("user.login");
    }
    public function register_()
    {
        return view("user.register");
    }
    public function coachregister_()
    {
        return view("user.coachregister");
    }

    public function register(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id ?? 3, 
        ]);
        return redirect('/login');
       
    }

    public function coachregister(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'weight' => 'required|integer',
            'height' => 'required|integer',
            'avatar' => 'required|string|max:1000',
            'description_user' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        

        // Create user
        $user = User::create([
            'name' => $request->name,
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'avatar' => $request->avatar,
            'description_user' => $request->description_user,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2, 
            'delUser' => 1, 
        ]);
        return redirect('/login');
       
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
