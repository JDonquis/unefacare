<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryGeneral extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'product_id',
        'stock',
        'entries',
        'outputs',
    ];

    public function product(){
        return $this->belongsTo(Product::class)->orderBy('name','desc');
    }
}
