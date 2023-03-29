<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        return view('livewire.panel.users')->layout('components.admin.app');
    }
}
