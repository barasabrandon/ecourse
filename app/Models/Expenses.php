<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;
    // Table name
    protected $table = 'expenses';
    //primary key
    public $primarykey = 'id';

    //Time stamps 
    public $timestamps = true;
}
