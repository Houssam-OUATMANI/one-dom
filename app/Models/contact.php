<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname', 'lastname', 'email', 'phone', 'category_id', 'message'
    ];


    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
