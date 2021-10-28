<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'link1', 'link2', 'image_id', 'status','order'];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
