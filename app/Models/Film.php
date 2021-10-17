<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'duration',
        'video_cdn',
        'image',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class)->orderBy('name', 'desc');
    }
}
