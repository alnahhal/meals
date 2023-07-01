<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image', 'price', 'preparation_time', 'vendor_id'];

    public function vendor(){
        return $this->belongsTo(Vendor::class);
    }
}
