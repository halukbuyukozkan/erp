<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    public function material()
    {
        return $this->belongsTo(Material::class);   
    }
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
