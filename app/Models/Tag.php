<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $primaryKey = 'tagID';
    protected $table = 'tags';
    protected $fillable = ['tag_name', 'slug'];
}
