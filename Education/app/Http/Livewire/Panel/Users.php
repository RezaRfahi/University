<?php

namespace App\Http\Livewire\Panel;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $users;
    public function render()
    {
        $this->users=User::all()->paginate(5);
        return view('livewire.panel.users')->layout('components.admin.app');
    }
}
