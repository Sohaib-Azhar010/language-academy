<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Query;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showDashboard()
    {
        $userName = Auth::guard('is_admin')->user()->name; // Fetch user name from authenticated Admin
        $queriesCount = Query::count();
        $studentsCount = Enrollment::count();
        $adminsCount = Admin::count();
        $instructorsCount = Instructor::count();
        $admins = Admin::all();

        return view('admin.dashboard', compact('userName', 'queriesCount', 'studentsCount', 'adminsCount', 'instructorsCount', 'admins'));
    }


    // Handle registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create user without logging in
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log::info('Admin created: ' . $admin->id);


        // Flash a success message to the session
        session()->flash('success', 'Registration successful!');

        // Redirect to login page or wherever you prefer
        return redirect()->back()->with('success', "Registration Successful!"); // Ensure you have a 'login' route defined
    }

    public function deleteAdmin($id)
    {
        $admin = Admin::find($id);
        if ($admin) {
            $admin->delete();
            return redirect()->back()->with('success', 'Admin deleted successfully.');
        }
        return redirect()->back()->with('error', 'Admin not found.');
    }

    public function showContact()
    {

        return view('contact');

    }

    public function storeQuery(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|max:255',
            'country' => 'required|string|max:255',
            'language_course' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        Query::create($request->all());

        // return redirect()->route('contact')->with('success', 'Your query has been submitted successfully!');
        return redirect()->to(route('contact') . '#contact-form-section')->with('success', 'Your query has been submitted successfully!');

    }

    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('is_admin')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->route('dashboard'); // Redirect to dashboard
        }

        // Redirect back to the login page if login fails
        return back()->withErrors([
            'email' => 'The provided credentials did not match',
        ]);
        
    }

    public function logout(Request $request)
    {
        Auth::guard('is_admin')->logout(); // Logout the user

        $request->session()->invalidate();  // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the token to protect against session fixation

        return redirect()->route('login'); // Redirect to the login page
    }



}
