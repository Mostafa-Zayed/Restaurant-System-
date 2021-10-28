<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'image_id', 'status', 'special'];

    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
