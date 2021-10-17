<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
    public function stock()
    {
        return $this->hasOne(Stock::class);
    }
}
