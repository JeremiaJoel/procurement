<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rfq_items extends Model
{
    protected $fillable = 
    [
        'rfq_item_id',
        'rfq_id',
        'product_id',
        'quantity'
    ];

    //Relationship ke tabel rfq
    public function rfq():BelongsTo
    {
        return $this->belongsTo(Rfq::class, 'rfq_id', 'rfq_id');
    }
}
