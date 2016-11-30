<?php

namespace App;
use App\Notifications\UserAdminResetPasswordNotification;
class AdminUser extends User
{
    protected $table='admin_users';
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserAdminResetPasswordNotification($token));
    }
}
