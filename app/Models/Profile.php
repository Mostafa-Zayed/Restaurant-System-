<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['show_name','job','image','facebook','twitter','instagram','status','user_id'];

    // relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
