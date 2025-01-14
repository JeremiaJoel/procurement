<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\SuperAdmin;
use App\Models\Admin;
use App\Models\Staff;

use Livewire\Component;
use Illuminate\Support\Facades\Hash; // Import untuk hashing password


class CreateUser extends Component
{
    public function render()
    {
        return view('livewire.create-user');
    }

    public $name;
    public $email;
    public $password;
    public $phoneNumber;
    public $address;
    public $role;

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->phoneNumber = '';
        $this->address = '';
    }


    public function mount()
    {
        $this->role = session('role', null); // Ambil role dari session
    }


    //Fungsi untuk mengirim data ke database
    public function store()
    {
        //Validasi data
        $rules = [
            'name' => 'required|string|min:6',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'phoneNumber' => 'required|numeric|digits_between:10,15',
            'address' => 'required|string|min:10',
        ];

        // Tambahkan validasi unik berdasarkan role
        if ($this->role === 'super_admin') {
            $rules['phoneNumber'] .= '|unique:super_admins,phone_number';
        } elseif ($this->role === 'admin') {
            $rules['phoneNumber'] .= '|unique:admins,phone_number';
        } elseif ($this->role === 'staff') {
            $rules['phoneNumber'] .= '|unique:staffs,phone_number';
        }

        // Lakukan validasi
        $this->validate($rules);

        //Kondisional untuk role yang akan di input ke tabel database
        if ($this->role === 'super_admin') {

            // Proses penyimpanan data (seperti contoh sebelumnya)
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'super_admin' => '1',
                'admin' => '0',
                'staff' => '0',
            ]);
            // Generate super admin id
            $lastSAdmin = SuperAdmin::orderBy('s_admin_id', 'desc')->first();
            $nextNumber = $lastSAdmin ? ((int) substr($lastSAdmin->s_admin_id, 2)) + 1 : 1;
            $sAdminId = 'SA' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
            SuperAdmin::create([
                's_admin_id' => $sAdminId,
                'user_id' => $user->id,
                's_admin_name' => $user->name,
                'email' => $user->email,
                'phone_number' => $this->phoneNumber,
                'address' => $this->address,
            ]);
        } elseif ($this->role === 'admin') {
            // Proses penyimpanan data (seperti contoh sebelumnya)
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'super_admin' => '0',
                'admin' => '1',
                'staff' => '0',
            ]);

            // Generate admin id
            $lastAdmin = Admin::orderBy('admin_id', 'desc')->first();
            $nextNumber = $lastAdmin ? ((int) substr($lastAdmin->admin_id, 2)) + 1 : 1;
            $adminId = 'A' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
            Admin::create([
                'admin_id' => $adminId,
                'user_id' => $user->id,
                'admin_name' => $user->name,
                'email' => $user->email,
                'phone_number' => $this->phoneNumber,
                'address' => $this->address,
            ]);
        } elseif ($this->role === 'staff') {

            // Proses penyimpanan data (seperti contoh sebelumnya)
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'super_admin' => '0',
                'admin' => '0',
                'staff' => '1',
            ]);

            // Generate staff id
            $lastStaff = Staff::orderBy('staff_id', 'desc')->first();
            $nextNumber = $lastStaff ? ((int) substr($lastStaff->staff_id, 2)) + 1 : 1;
            $staffId = 'S' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
            Staff::create([
                'staff_id' => $staffId,
                'user_id' => $user->id,
                'staff_name' => $user->name,
                'email' => $user->email,
                'phone_number' => $this->phoneNumber,
                'address' => $this->address,
            ]);
        }
        //dispatch
        $this->dispatch(
            'alert',
            icon: 'success',
            title: 'Your account has been created!',
            position: 'center',
        );

        //reset form
        $this->resetForm();
        // Generate buyer_id
        // $lastBuyer = Buyer::orderBy('buyer_id', 'desc')->first();
        // $nextNumber = $lastBuyer ? ((int) substr($lastBuyer->buyer_id, 2)) + 1 : 1;
        // $buyerId = 'BY' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);



        // Buyer::create([
        //     'buyer_id' => $buyerId,
        //     'user_id' => $user->id, // Relasi ke user
        //     'email' => $user->email,
        //     'contact_person' => $this->contactPerson,
        //     'phone_number' => $this->phoneNumber,
        //     'address' => $this->address,
        // ]);



    }
}
