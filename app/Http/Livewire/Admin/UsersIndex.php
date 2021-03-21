<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
class UsersIndex extends Component
{
    use WithPagination;
    
    public $search;

    protected $paginationTheme = "bootstrap";


    public function render()
    {
        $users = User::where('name', 'LIKE' , '%' . $this->search .'%')->paginate();
        return view('livewire.admin.users-index',compact('users'));
    }
}
