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
    public function departments(){
        return $this->belongsToMany('App\Models\Department', 'user_department');
    }

    /**
     * Check if current user has any department
     * @param string $department
     * @return bool
     */
    public function hasAnyDepartment(string $department)
    {
        return null !== $this->departments()->where('name', $department)->first();
    }
    /**
     * Check if current user has any department
     * @param array $department
     * @return bool
     */
    public function hasAnyDepartments(array $department)
    {
        return null !== $this->departments()->whereIn('name', $department)->first();
    }

    /**
     * Get the Announcements that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function announcements()
    {
        return $this->hasMany('App\Models\Announcement');
    }

    /**
     * Get the Comments that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    /**
     * Get the profile that own the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }

    /**
     * Get the events that own the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany('App\Models\Event');
    }

    /**
     * Get the questions that own the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }

    /**
     * Get the answers that own the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany('App\Models\Answers');
    }

    /**
     * Get the models that own the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function models()
    {
        return $this->hasMany('App\Models\Models');
    }

    /**
     * Get the projects that own the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }

    /**
     * Get the tasks that own the user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Task');
    }
}
