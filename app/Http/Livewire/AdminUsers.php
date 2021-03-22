<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUsers extends Component
{
    public $search;
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    

    public function render()
    {
        $users = User::paginate(8);

        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('email', 'LIKE', '%' . $this->search . '%')
                    ->paginate(8);
       

        return view('livewire.admin-users', compact('users'));
    }
}
