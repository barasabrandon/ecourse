<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneSales extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'phone_sales';
    //primary key
    public $primarykey = 'id';

    //Time stamps 
    public $timestamps = true;
}
