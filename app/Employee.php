<?php

namespace App;

use App\Notifications\Employee\EmployeeResetPassword;
use App\Notifications\Employee\EmployeeVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [

        'name',
        'user_id',
        'role_id',
        'contact',
        'email',
        'CNIC',
        'adress',
        'gender',
        'qualification',
        'Salary',
        'DOB',
        'photo_id',
        'password',

    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
    public function orders()
    {
        return $this->hasMany('App\Order');
    }


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
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new EmployeeResetPassword($token));
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new EmployeeVerifyEmail);
    }

}
