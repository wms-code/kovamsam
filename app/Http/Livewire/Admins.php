<?php

namespace App\Http\Livewire;

use App\Role;
use App\Admin;
use Livewire\Component;
use Auth;



class Admins extends Component
{
    public $admins, $roles, $name, $email, $user_id;

    public $updateMode = false;

    public $register = false;

    public function render()
    {
        $this->admins = Admin::where('id', '!=', 1 )->get();
        return view('admin.users.show');
    }

    public function addUser()
    {
        $this->roles = Role::all();
        $this->register =true;
    }
}
