<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = ['business_name', 'address', 'vat_number', 'slug', 'logo', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function typologies()
    {
        return $this->belongsToMany(Typology::class);
    }
    public function dishes()
    {
        return $this->hasMany(Dishe::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }


}
