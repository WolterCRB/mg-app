<?php

namespace App\Models;

use http\Exception\BadConversionException;
use Illuminate\Database\Eloquent\Model;

class Kirgu extends Model
{
 protected $fillable = [
     'price',
     'demand',
     'name'
 ];
}
