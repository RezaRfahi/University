<?php

namespace App\Http\Livewire\Panel;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public $search = '';

    public $sort = '';

    protected $queryString =['search' => ['except' => '']];

    protected $paginationTheme = 'bootstrap';

    public function deleteUser($id)
    {
        User::find($id)->delete();
        $this->reset();
    }

    public function render()
    {
        $users=User::query()->when($this->search != '', function ($query)
        {
            $query->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('email', 'like', '%'.$this->search.'%');
        })->paginate(5);
        return view('livewire.panel.users', compact('users'))->layout('components.admin.app');
    }
}
