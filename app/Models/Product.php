<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable =
    [
        'products_id',
        'name',
        'description',
        'type',
        'price',
        'unit_of_measure',
        'rate'
    ];

    //Relationship ke tabel Suppliers
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'supplier_id');
    }

}
