<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buyer extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'buyers';
    protected $fillable =
    [
        'buyer_id',
        'user_id',
        'contact_person',
        'phone_number',
        'email',
        'address'
    ];


    //Relationship ke tabel User
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    //Relationship ke tabel rfq
    public function rfq(): HasMany
    {
        return $this->hasMany(Rfq::class, 'buyer_id', 'buyer_id');
    }
}
