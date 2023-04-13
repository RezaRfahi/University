<?php

namespace App\Http\Livewire\Panel\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUser extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $password;
    public $profile_photo;
    public $level;
    public $position;
    public $phone_number;

    protected $rules = [
        'name' => 'required|min:3|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
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
        $valid_data = $this->validate();
        $valid_data['password'] = bcrypt($valid_data['password']);
        $valid_data['remember_token'] = Str::random(12);
        User::create($valid_data);
        session()->flash('alert.message', 'کاربر با موفقیت ایجاد شد');

        return redirect()->route('panel.users');
    }

    public function render()
    {
        return view('livewire.panel.users.create-user')->layout('components.admin.app');
    }
}
