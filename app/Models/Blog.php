<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'category_id',
        'user_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }


}
