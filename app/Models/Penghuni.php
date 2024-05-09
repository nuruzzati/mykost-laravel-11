<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


     public function kosts()
    {
        return $this->hasMany(Kost::class)->onDelete('cascade');
    }
}
