<?php

namespace App\Models;

use App\Models\AvailablePosition;
use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    protected $fillable = ['job_category_id', 'company', 'address', 'description'];

    /**
     * Get the job category that owns the job vacancy.
     */
    public function category()
    {
        return $this->belongsTo(JobCategory::class, 'job_category_id');
    }

    /**
     * Get the available positions for the job vacancy.
     */
    public function availablePositions()
    {
        return $this->hasMany(AvailablePosition::class);
    }
}