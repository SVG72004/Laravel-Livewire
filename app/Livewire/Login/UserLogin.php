<?php

namespace App\Livewire\Login;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class UserLogin extends Component
{
    public $email;
    public $password;

    // public function __construct()
    // {
    //     if (Auth::check()) {
    //         return redirect('/');
    //     }
    // }

    public function mount()
    {
        if (Auth::check()) {
            return redirect('/');
        }
    }

    public function rules ()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function login()
    {
        // echo "<pre>"; print_r($this->email); die("========");
        $this->validate();
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            // dd(Auth::check());
            return redirect()->to('/');
        } else {
            session()->flash('error', 'Invalid credentials');
        }

        throw ValidationException::withMessages([
            'email' => 'Invalid email or password',
        ]);
    }

    public function render()
    {

        return view('livewire.login.user-login')->layout('layouts.login');
    }
}
