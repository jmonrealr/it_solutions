<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the Department that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function deparments(){
        return $this->belongsToMany('App\Models\Department');
    }

    /**
     * Check if current user has any department
     * @param string $deparment
     * @return bool
     */
    public function hasAnyDepartment(string $deparment)
    {
        return null !== $this->deparments()->where('name', $deparment)->first();
    }
    /**
     * Check if current user has any department
     * @param array $department
     * @return bool
     */
    public function hasAnyDepartments(array $department)
    {
        return null !== $this->deparments()->whereIn('name', $department)->first();
    }

    public function tasks(){
        return $this->hasMany('App\Models\Task');
    }
}
