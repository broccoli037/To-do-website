<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'status', // Add 'status' to the fillable array
        // Other fillable fields...
    ];
    use HasFactory;
}
