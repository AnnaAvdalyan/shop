<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleries_products extends Model
{
    use HasFactory;
    protected $fillable = ['gallery_id','product_id'];

}
