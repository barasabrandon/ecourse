<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneTypes extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'phone_types';
    //primary key
    public $primarykey = 'id';

    //Time stamps 
    public $timestamps = true;
}
