<?php

namespace App\Http\Livewire\Panel;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public $search='';

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $users=User::all();
        return view('livewire.panel.users', compact('users'))->layout('components.admin.app');
    }
}
