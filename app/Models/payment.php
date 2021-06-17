<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'payments';
    protected $timestamp = true;
    use HasFactory;
}
