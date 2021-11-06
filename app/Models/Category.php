<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','status'];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function(){
            Cache::forget('categories');
        });
    }
}
