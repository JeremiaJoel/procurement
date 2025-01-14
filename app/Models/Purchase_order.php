<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Purchase_order extends Model
{
    protected $fillable = [
        'po_id',
        'rfq_id',
        'buyer_id',
        'supplier_id',
        'status',
        'total_price',
    ];

    //relasi untuk ke tabel rfqs

    public function rfq(): BelongsTo
    {
        return $this->belongsTo(Rfq::class, 'rfq_id', 'rfq_id');
    }
    public function buyer():BelongsTo
    {
        return $this->belongsTo(Buyer::class, 'buyer_id', 'buyer_id');
    }
}
