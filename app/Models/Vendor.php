<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'phone'];

    public function meals(){
        return $this->hasMany(Meal::class);
    }
}
