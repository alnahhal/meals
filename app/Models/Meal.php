<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['title', 'description', 'image', 'price', 'preparation_time', 'vendor_id'];

    public function vendor(){
        return $this->belongsTo(Vendor::class);
    }
}
