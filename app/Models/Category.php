<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
     /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    
        /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'status',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
