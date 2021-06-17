<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delivary extends Model
{
   
        protected $primaryKey = 'id';
        protected $table = 'delivaries';
        protected $timestamp = true;
        use HasFactory;
 
    
}
