<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airlines extends Model
{
    use HasFactory;

    protected $table = "airlines";
    protected $fillable = ["name", 'code', 'updated_at', 'created_at'];
}