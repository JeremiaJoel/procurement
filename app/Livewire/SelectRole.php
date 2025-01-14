<?php

namespace App\Livewire;

use Livewire\Component;

class SelectRole extends Component
{
    public function render()
    {
        return view('livewire.select-role');
    }

    public $role;

    public $super_admin = '0';
    public $admin = '0';
    public $staff = '0';
    //Fungsi untuk memilih role user
    public function selectRole($role)
    {
        $this->super_admin = '0';
        $this->admin = '0';
        $this->staff = '0';

        $this->$role = '1';
        session(['role' => $role]);


        $this->dispatch(
            'selectedRole',
            icon: 'success',
            title: 'role selected!',
            position: 'center',
        );
    }
}
