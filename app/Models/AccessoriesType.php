<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessoriesType extends Model
{
    use HasFactory;

     // Table name
     protected $table = 'accessories_types';
     //primary key
     public $primarykey = 'id';
 
     //Time stamps 
     public $timestamps = true;
}
