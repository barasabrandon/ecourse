<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalDailyExpenses extends Model
{
    use HasFactory;

     // Table name
     protected $table = 'total_daily_expenses';
     //primary key
     public $primarykey = 'id';
 
     //Time stamps 
     public $timestamps = true;
}
