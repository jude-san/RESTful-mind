<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /* Add the fillable property into the Product Model */
    protected $fillable = ['title', 'description', 'price', 'availability'];
}
