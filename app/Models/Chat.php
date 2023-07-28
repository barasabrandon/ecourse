<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

     // Table name
     protected $table = 'chats';
     //primary key
     public $primarykey = 'id';
 
     //Time stamps 
     public $timestamps = true;

     //Fillable
     protected $fillable = ['name', 'user_id', 'message'];
}
