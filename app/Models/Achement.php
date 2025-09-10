<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achement extends Model
{
      protected $fillable = [
        'achement_title',
        'achement_title_mm',
        'achement_location',
        'achement_location_mm',
        'achement_start_date',
        'achement_end_date',
        'achement_description',
        'achement_description_mm',
        'achement_year',
        'achement_year_mm',
        'achement_created_user_id',
        'achement_updated_user_id',
    ];

        public function created_user()
    {
        return $this->belongsTo(User::class, 'achement_created_user_id');
    }
    public function updated_user()
    {
        return $this->belongsTo(User::class, 'achement_updated_user_id');
    }
}
