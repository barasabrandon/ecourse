<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpensesType extends Model
{
    use HasFactory;

    
     // Table name
     protected $table = 'expenses_types';
     //primary key
     public $primarykey = 'id';
 
     //Time stamps 
     public $timestamps = true;
}
