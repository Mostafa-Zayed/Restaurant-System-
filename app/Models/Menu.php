<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;
class Menu extends Model
{
    use HasFactory;
    use HasTrixRichText ;
    // protected $fillable = ['name','price', 'image', 'discount', 'category_id', 'special','image_id','status'];
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    
}
