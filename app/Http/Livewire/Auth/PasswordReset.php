<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Livewire\Component;

class PasswordReset extends Component
{
    public $token, $email, $password, $password_confirmation;

    public function mount($token, $email)
    {
        $this->token = $token;
        $this->email = $email;
    }

    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'confirmed', 'min:8'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function resetPassword()
    {
        $this->validate();

        $status = Password::reset(
            $this->only(['token', 'email', 'password', 'password_confirmation']),
            function ($user) {
                $user->forceFill([
                    'password' => Hash::make($this->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));

                Auth::login($user);
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            if (Auth::user()->isAdmin()) {
                return redirect(route('admin.home'));
            } else if (Auth::user()->isCustomer()) {
                return redirect(route('customer.home'));
            }
        } else {
            $this->addError('email', __($status));
        }
    }

    public function render()
    {
        return view('livewire.auth.password-reset')->layout('guest');
    }
}
