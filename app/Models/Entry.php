<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'quantity',
        'expired_date',
        'entry_general_id',
    ];

    public $casts = [
        'expired_date' => 'date',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function entryGeneral(){
        return $this->belongsTo(EntryGeneral::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('F j, Y');
    }


}
