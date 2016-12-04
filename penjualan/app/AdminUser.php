<?php

namespace App;
use App\Notifications\UserAdminResetPasswordNotification;
class AdminUser extends User
{   protected $fillable = [
        'name', 'email', 'password'
    ];
      protected $hidden = [
        'password', 'remember_token',
    ];
    protected $table='admin_users';
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserAdminResetPasswordNotification($token));
    }
}
