<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $fillable = [
        'committee_name',
        'committee_name_mm',
        'committee_job_title',
        'committee_job_title_mm',
        'committee_image',
        'committee_is_show_front',
        'committee_created_user_id',
        'committee_updated_user_id',
    ];

        public function created_user()
    {
        return $this->belongsTo(User::class, 'committee_created_user_id');
    }
    public function updated_user()
    {
        return $this->belongsTo(User::class, 'committee_updated_user_id');
    }
}
