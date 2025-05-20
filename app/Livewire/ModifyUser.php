<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ModifyUser extends Component
{
    public $name;
    public $email;
    public $status;
    public function save()
    {

        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'status' => 'required',
        ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'status' => $this->status,
            'password' => bcrypt(rand(1000, 9999))

        ]);
        $this->reset();
        $this->dispatch('success');
    }
    public function render()
    {
        return view('livewire.modify-user');
    }
}
