<?php

namespace App\Http\Livewire\Panel\Users;

use Livewire\Component;

class CreateUser extends Component
{
    public function render()
    {
        return view('livewire.panel.users.create-user')->layout('components.admin.app');
    }
}
