<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Content extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image1', 'text1', 'image2', 'text2', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
