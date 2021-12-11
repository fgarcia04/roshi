<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Main extends Component
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['email:dns', 'unique:users,email'],
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $this->validate();
        DB::transaction(function () {
            $password = Str::random(8);
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'role' => 'admin',
                'password' => bcrypt($password),
            ]);
        });

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.users.main');
    }
}
