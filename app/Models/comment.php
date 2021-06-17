<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'comments';
    protected $timestamp = true;
    use HasFactory;
}
