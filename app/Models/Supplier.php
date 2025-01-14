<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Supplier extends Model
{
    protected $fillable =
    [
        'supplier_id',
        'company_name',
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

    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'supplier_id', 'supplier_id');
    }
}
