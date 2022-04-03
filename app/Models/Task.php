<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'time_hour',
        'user_id',
        'project_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    /**
     * Get the project that own the Task
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function projects(){
        return $this->belongsTo('App\Models\Project');
    }

    /**
     * Get the user that own the Task
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
