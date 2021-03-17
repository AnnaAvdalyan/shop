<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'category_id', 'img', 'price', 'discount', 'title', 'title_ru', 'title_arm', 'description', 'description_ru', 'description_arm', 'slug', 'slug_ru', 'slug_arm', 'length', 'width', 'height', 'kilograms', 'count', 'status', 'can_add'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceForCount($count){
        if(!is_null($count)){
            return $this->price * $count;
        }else{
            return $this->price;
        }
    }
}
