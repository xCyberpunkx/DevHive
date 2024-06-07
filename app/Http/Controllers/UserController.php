<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register/Create Form
    // Returns the view for user registration
    public function create() {
        return view('users.register');
    }

    // Create New User
    // Validates and stores a new user in the database, then logs them in
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login the newly created user
        auth()->login($user);

        // Redirect to home with a success message
        return redirect('/')->with('message', 'User created and logged in');
    }

    // Logout User
    // Logs out the user and invalidates their session
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to home with a success message
        return redirect('/')->with('message', 'You have been logged out!');
    }

    // Show Login Form
    // Returns the view for user login
    public function login() {
        return view('users.login');
    }

    // Authenticate User
    // Validates user credentials and logs them in
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        // Attempt to authenticate and log in the user
        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            // Redirect to home with a success message
            return redirect('/')->with('message', 'You are now logged in!');
        }

        // Return back with error message if authentication fails
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
