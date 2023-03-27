<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.panel.index')->layout('components.admin.app');
    }
}
