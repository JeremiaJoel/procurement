<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Po_items extends Model
{
    protected $fillable = [
        'po_id',
        'rfq_id',
        'buyer_id',
        'supplier_id',
        'status',
        'total_price'
    ];

    //Relationship ke tabel purchase_orders

    public function purchase_order():BelongsTo
    {
        return $this->belongsTo(Purchase_order::class, 'po_id','po_id');
    }
}
