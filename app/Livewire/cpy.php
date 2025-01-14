<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Buyer;
use Livewire\Component;

class CreateUser extends Component
{
    public $companyName;
    public $email;
    public $password;
    public $contactPerson;
    public $phoneNumber;
    public $address;

    //fungsi untuk merender ke view signup
    public function render()
    {
        return view('signup');
    }

    //Generate buyer_id untuk dimasukkan ke database



    //Fungsi untuk mengirim data ke database
    public function store()
    {
        $this->validate([
            'companyName' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'contactPerson' => 'required|string|min:6',
            'address' => 'required|string|min:10'
        ]);

        // Generate buyer_id
        $lastBuyer = Buyer::orderBy('id', 'desc')->first(); // Mengambil entri terakhir
        $nextNumber = $lastBuyer ? ((int) substr($lastBuyer->buyer_id, 2)) + 1 : 1; // Increment nomor
        $buyerId = 'BY' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT); // Format ID

        User::create([
            'name' => $this->companyName,
            'email' => $this->email,
            'password' => $this->password
        ]);

        Buyer::create([
            'buyer_id' => $this->buyerId,
            'contact_person' => $this->contactPerson,
            'phone_number' => $this->phoneNumber,
            'address' => $this->address
        ]);

        session()->flash('success', 'User berhasil dibuat');
    }
}
