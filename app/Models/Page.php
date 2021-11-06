<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['name','order','status'];

    public static function boot()
    {
        parent::boot();
        static::updating(function(){
            Cache::forget('pages');
        });
    }
}
