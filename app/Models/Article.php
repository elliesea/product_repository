<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function trip(){
        return $this->belongsTo(Trip::class);
    }
    
    protected $fillable = [
        'trip_id',
        'subtitle',
        'body',
    ];
}
