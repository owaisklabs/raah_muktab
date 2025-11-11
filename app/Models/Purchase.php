<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function supplier() : BelongsTo {
        return $this->belongsTo(Supplier::class,'supplier_id');
    }

    public function item() : BelongsTo {
        return $this->belongsTo(Item::class,'item_id');
    }
    public function purchaseMode() : BelongsTo {
        return $this->belongsTo(PurchaseMode::class,'purchase_mode_id');
    }
}
