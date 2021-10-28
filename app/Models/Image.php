<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title','width', 'heigth', 'alt', 'class', 'img_id'];

    public function slider()
    {
        return $this->hasOne(Slider::class);
    }

    public function menu()
    {
        return $this->hasOne(Menu::class);
    }
}
