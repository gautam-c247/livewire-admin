<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ListUsers extends Component
{
    use WithPagination;

  protected $paginationTheme = 'bootstrap';
    protected $listeners = ['success' => '$refresh'];
    #On["success"]

    #[On('removeUser')]
    public function  removeUser($id){

User::find($id)->delete();        
   
 }
   

    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.list-users',['users' => $users]);
    }
}
