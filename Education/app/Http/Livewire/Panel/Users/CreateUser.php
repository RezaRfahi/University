<?php

namespace App\Http\Livewire\Panel\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUser extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $password;
    public $profile_photo_path;
    public $level;
    public $position;
    public $phone_number;

    protected $rules = [
        'name' => 'required|min:3|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
        'profile_photo_path' => 'nullable|image|mimes:jpeg,png|max:2048',
        'level' => 'required|in:administrator,controller,user,reader',
        'position' => 'required|in:manager,assistant,warden,impresario,employee',
        'phone_number' => 'nullable|numeric|digits:11',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        // Save the user to the database

        session()->flash('success', 'User created successfully.');

        return redirect()->route('panel.users');
    }

    public function render()
    {
        return view('livewire.panel.users.create-user')->layout('components.admin.app');
    }
}
