<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reverse extends Model
{
    use HasFactory;

    protected $fillable = ['image','name', 'brand','capacity','original','membrane','filter_stage','size','reserve_capacity','technology','warranty','price','discount_price'];

}
