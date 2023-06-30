<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'phone', 'description'];

    public function meal(){
        return $this->hasMany(Meal::class);
    }
}
