<?php

namespace App\Models;

// QUAN TRỌNG: Phải có dòng này mới dùng được HasFactory
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
    ];
}