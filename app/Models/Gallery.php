<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable=['img','user_id'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
