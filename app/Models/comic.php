<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comic extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'release_date',
        'author_id',
        'antagonist',
        'image',
        'short_description',
    ];

    public function author()
    {
        return $this->belongsTo(author::class, 'author_id');
    }


}
