<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{


    
    public function showSignupPage(){
        return view('SignUp');
     }
    public function showLoginPage(){
       return view('Login');
    } 

    public function showProfile()
   {
    $user = Auth::user(); // Retrieve the currently authenticated user
    return view('profileClient', compact('user')); // Pass the user data to the view
   } 

    public function validerLogin(Request $request){
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Authentication passed...
           // dd("cool");
            //return view('profile');
            //return $this->showProfile();
            return redirect()->route('profileClient');
        } else {
            // Authentication failed...
           // dd($credentials);
            //dd(Auth::attempt($credentials));
          //  dd("not cool");
           return redirect()->back()->with('error', 'Invalid email or password')->withInput($request->only('email'));
        }
    }
    public function signup(Request $request)
{
    // Define regular expression patterns
    $namePattern = '/^[A-Za-z\s]+$/'; // Only letters and spaces allowed for full name
    $emailPattern = '/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/'; // Email pattern
    $phonePattern = '/^\d{10}$/'; // 10 digits for phone number
    $passwordPattern = '/^(?=.*[a-zA-Z])(?=.*\d).{8,}$/'; // Minimum 8 characters with at least one letter and one digit
    $cinPattern = '/^[A-Za-z]{2}\d{6}$/'; // Two letters followed by six digits for CIN

    // Define custom error messages
    $messages = [
        'username.regex' => 'The username can only contain letters and spaces.',
        'full_name.regex' => 'The full name can only contain letters and spaces.',
        'email.regex' => 'Please enter a valid email address.',
        'phone.regex' => 'The phone number must be a 10-digit number.',
        'password.regex' => 'The password must be at least 8 characters long and contain at least one letter and one digit.',
        'cin.regex' => 'Please enter a valid CIN format (e.g., AB123456).',
    ];

    // Validate the form data with regular expressions and custom error messages
    $validatedData = $request->validate([
        'username' => ['required', 'regex:' . $namePattern],
        'full_name' => ['required', 'regex:' . $namePattern],
        'email' => ['required', 'email', 'regex:' . $emailPattern, 'unique:users'],
        'phone' => ['required', 'regex:' . $phonePattern],
        'password' => ['required', 'confirmed', 'regex:' . $passwordPattern],
        'cin' => ['required', 'regex:' . $cinPattern],
    ], $messages);

    // Create a new user record in the database
    User::create([
        'username' => $validatedData['username'],
        'full_name' => $validatedData['full_name'],
        'email' => $validatedData['email'],
        'phone_number' => $validatedData['phone'],
        'password_hash' => bcrypt($validatedData['password']), // Hash the password
        'cin' => $validatedData['cin'],
    ]);

    // Flash a success message to inform the user
    return redirect()->route('signupView')->with('success', 'Your account has been created successfully. You can now log in.');
 }

}