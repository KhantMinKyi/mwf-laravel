<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'post_banner',
        'post_title',
        'post_created_date',
        'post_created_user_id',
        'post_updated_user_id',
        'post_category',
        'post_is_show_front',
        'post_body',
        'post_image',
        'post_is_active',
        'post_title_mm',
        'post_body_mm',
    ];

        public function created_user()
    {
        return $this->belongsTo(User::class, 'post_created_user_id');
    }
    public function updated_user()
    {
        return $this->belongsTo(User::class, 'post_updated_user_id');
    }
}
