<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['img', 'name', 'name_ru', 'name_arm', 'parent_id'];

    public  function product()
    {
        return $this->hasMany(Product::class);
    }


}
