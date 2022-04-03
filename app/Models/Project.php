<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
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
        'cost_hour',
        'total_cost',
        'customer_id',
        'contract_id',
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
     * Get the Customer that own the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customers(){
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }

    /**
     * Get the risks that owns the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function risks()
    {
        return $this->belongsToMany('App\Models\Risk');
    }

    /**
     * Get the tasks that owns the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }

    /**
     * Get the contract that own the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contract()
    {
        return $this->belongsTo('App\Models\Contract');
    }

    /**
     * Get the user that own the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
