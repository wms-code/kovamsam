<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Admin;

use Auth;

use App\Role;



class Admins extends Component
{
    public $admins, $roles, $name, $email, $user_id;

    public $updateMode = false;

    public $register = false;

    public function render()
    {
        $this->admins = Admin::where('id', '!=', Auth::user()->id())->get();
        return view('admin.users.show');
    }

    public function addUser()
    {
        $this->roles = Role::all();
        $this->register =true;
    }
}
