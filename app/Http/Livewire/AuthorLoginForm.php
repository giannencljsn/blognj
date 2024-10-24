<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthorLoginForm extends Component
{
    public $login_id, $email, $password;
    public function LoginHandler()
    {

        $fieldType = filter_var($this->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if ($fieldType === 'email') {
            $this->validate([
                'login_id' => 'required|email|exists:users,email',
                'password' => 'required|min:3',
            ], [
                'login_id' => 'Email or Username is required!',
                'login_id.email' => 'Invalid email address',
                'login_id.exists' => 'Email is not registered',
                'password.required' => 'Password is required',
            ]);
        } else {
            $this->validate([
                'login_id' => 'required|exists:users,username',
                'password' => 'required|min:3',
            ], [
                'login_id.required' => 'Email or Username is required',
                'login_id.exists' => 'Username is not registered',
                'password.required' => 'Password is required',
            ]);
        }


        $creds = array($fieldType => $this->login_id, 'password' => $this->password);

        if (Auth::guard('web')->attempt($creds)) {
            $checkUser = User::where($fieldType, $this->login_id)->first();
            if ($checkUser->blocked == 1) {
                Auth::guard('web')->logout();
                return redirect()->route('author.login')->with('fail', 'Your Account has been blocked');
            } else {
                return redirect()->route('author.home');
            }
        } else {
            session()->flash('fail', 'Incorrect Email/Username or Password');
        }



        // // Trim the inputs to remove any accidental spaces
        // $this->email = trim($this->email);
        // $this->password = trim($this->password);  // This will remove any trailing spaces

        // // // Optional: Log the trimmed password for verification (remove this in production)
        // // logger()->info('Trimmed Password: ' . $this->password);

        // // Validate the inputs
        // $this->validate([
        //     'email' => 'required|email|exists:users,email',
        //     'password' => 'required|min:3'
        // ], [
        //     'email.required' => 'Enter your email address',
        //     'email.email' => 'Invalid email address',
        //     'email.exists' => 'This email is not registered in the database',
        //     'password.required' => 'Password is required'
        // ]);

        // // Prepare credentials array
        // $creds = ['email' => $this->email, 'password' => $this->password];

        // // Attempt authentication
        // if (Auth::guard('web')->attempt($creds)) {
        //     $checkUser = User::where('email', $this->email)->first();
        //     if ($checkUser->blocked == 1) {
        //         Auth::guard('web')->logout();
        //         return redirect()->route('author.login')->with('fail', 'Your account has been blocked.');
        //     }

        //     // Successful login
        //     return redirect()->route('author.home');
        // } else {
        //     // Invalid credentials
        //     return redirect()->route('author.login')->with('fail', 'Invalid login credentials.');
        // }
    }

    public function render()
    {
        return view('livewire.author-login-form');
    }
}
