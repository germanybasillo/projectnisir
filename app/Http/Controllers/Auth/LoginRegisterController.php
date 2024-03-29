<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    /**
     * Instantiate a new LoginRegisterController instance.
     */
    public function __construct()
    {
        // Apply middleware to prevent access to login and register routes
        // $this->middleware('guest')->except('logout');
    }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        // Redirect to dashboard if user is authenticated
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('auth.register');
    }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed',
            'user_type' => 'required|in:user,admin' // Assuming user type can be 'user' or 'admin'
        ]);

        // Create new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => $request->user_type // User-specified user type
        ]);

        // Attempt to log in the new user
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);

        // Regenerate session and redirect to dashboard
        $request->session()->regenerate();
        return redirect()->route('home')->withSuccess('You have successfully registered & logged in!');
    }

    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        // Redirect to dashboard if user is authenticated
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('auth.login');
    }

    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        // Validate the request
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home')->withSuccess('You have successfully logged in!');
        }

        // Redirect back with error if authentication fails
        return back()->withErrors(['email' => 'Your provided credentials do not match in our records.'])->onlyInput('email');
    } 
    
    /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        // Check if user is authenticated
        if (Auth::check()) {
            return view('auth.home');
        }
        
        // Redirect to login with error message if not authenticated
        return redirect()->route('login')->withErrors(['email' => 'Please login to access the dashboard.'])->onlyInput('email');
    } 
    

    public function about()
    {
        // Check if user is authenticated
        if (Auth::check()) {
            return view('auth.about');
        }
        
        // Redirect to login with error message if not authenticated
        return redirect()->route('login')->withErrors(['email' => 'Please login to access the dashboard.'])->onlyInput('email');
    } 

    public function admin()
    {
        // Check if user is authenticated
        if (Auth::check()) {
            return view('auth.admin');
        }
        
        // Redirect to login with error message if not authenticated
        return redirect()->route('login')->withErrors(['email' => 'Please login to access the dashboard.'])->onlyInput('email');
    } 

    public function blog()
    {
        // Check if user is authenticated
        if (Auth::check()) {
            return view('auth.blog');
        }
        
        // Redirect to login with error message if not authenticated
        return redirect()->route('login')->withErrors(['email' => 'Please login to access the dashboard.'])->onlyInput('email');
    } 

    public function contact()
    {
        // Check if user is authenticated
        if (Auth::check()) {
            return view('auth.contact');
        }
        
        // Redirect to login with error message if not authenticated
        return redirect()->route('login')->withErrors(['email' => 'Please login to access the dashboard.'])->onlyInput('email');
    } 

    public function portfolio()
    {
        // Check if user is authenticated
        if (Auth::check()) {
            return view('auth.portfolio');
        }
        
        // Redirect to login with error message if not authenticated
        return redirect()->route('login')->withErrors(['email' => 'Please login to access the dashboard.'])->onlyInput('email');
    } 

    public function services()
    {
        // Check if user is authenticated
        if (Auth::check()) {
            return view('auth.services');
        }
        
        // Redirect to login with error message if not authenticated
        return redirect()->route('login')->withErrors(['email' => 'Please login to access the dashboard.'])->onlyInput('email');
    } 

    public function user()
    {
        // Check if user is authenticated
        if (Auth::check()) {
            return view('auth.user');
        }
        
        // Redirect to login with error message if not authenticated
        return redirect()->route('login')->withErrors(['email' => 'Please login to access the dashboard.'])->onlyInput('email');
    } 
    /**
     * Log out the user from application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        // Log out the user
        Auth::logout();
        
        // Invalidate session and regenerate token
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        // Redirect to login page with success message
        return redirect()->route('login')->withSuccess('You have logged out successfully!');
    }    
}

