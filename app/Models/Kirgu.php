<?php

namespace App\Models;

use http\Exception\BadConversionException;
use Illuminate\Database\Eloquent\Model;

class Kirgu extends Model
{
    protected $table = 'kirgu';
     protected $fillable = [
         'price',
         'demand',
         'name'
     ];
}
