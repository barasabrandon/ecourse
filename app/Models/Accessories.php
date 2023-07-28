<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessories extends Model
{
    use HasFactory;
     // Table name
     protected $table = 'accessories';
     //primary key
     public $primarykey = 'id';
 
     //Time stamps 
     public $timestamps = true;
}
