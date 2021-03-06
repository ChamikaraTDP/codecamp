<?php

namespace App;

use App\Mail\NewUserWelcomeMail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The boot method.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::created(
            function ($user) {
                $user->profile()->create(
                    [
                        'title' => $user->username,
                    ]
                );

                Mail::to($user->email)->send(new NewUserWelcomeMail());
            }
        );



    }

    /**
     * Relation: user to posts.
     *
     * @return Illuminate\Foundation\Auth\User
     */
    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }

    /**
     * Relation: user to a profile.
     *
     * @return Illuminate\Foundation\Auth\User
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * Relation: user to profiles.
     *
     * @return Illuminate\Foundation\Auth\User
     */
    public function following()
    {
        return $this->belongsToMany(Profile::class);
    }


}
