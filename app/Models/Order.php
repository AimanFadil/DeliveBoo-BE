<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address','phone','mail',  'price', 'restaurant_id'];
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function dishes()
    {
        return $this->belongsToMany(Dishe::class);
    }
}
