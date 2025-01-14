<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rfq extends Model
{
    protected $fillable =
    [
        'rfq_id',
        'status'
    ];

    //relasi ke tabel buyer
    public function buyer(): BelongsTo
    {
        return $this->belongsTo(Buyer::class, 'buyer_id', 'buyer_id');
    }
    //relasi ke tabel rfq_items
    public function items(): HasMany
    {
        return $this->hasMany(Rfq_items::class, 'rfq_id', 'rfq_id');
    }

    //relasi ke tabel purchase_orders
    public function purchase_order(): HasMany
    {
        return $this->hasMany(Purchase_order::class, 'po_id', 'po_id');
    }
}
