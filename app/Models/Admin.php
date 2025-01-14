<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Admin extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'admins';
    protected $fillable =
    [
        'admin_id',
        'admin_name',
        'user_id',
        'phone_number',
        'email',
        'address'
    ];


    //Relationship ke tabel User
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
