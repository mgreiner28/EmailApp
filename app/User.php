<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\ResetPassword;
use Hash;

/**
 * Class User
 *
 * @package App
 * @property string $name
 * @property string $phone_number
 * @property string $email
 * @property string $password
 * @property string $remember_token
*/
class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['name', 'phone_number', 'email', 'password', 'remember_token'];
    protected $hidden = ['password', 'remember_token'];
    
    
    
    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }
    
    
    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
    
    public function topics() {
        return $this->hasMany(MessengerTopic::class, 'receiver_id')->orWhere('sender_id', $this->id);
    }

    public function inbox()
    {
        return $this->hasMany(MessengerTopic::class, 'receiver_id');
    }

    public function outbox()
    {
        return $this->hasMany(MessengerTopic::class, 'sender_id');
    }
    public function internalNotifications()
    {
        return $this->belongsToMany(InternalNotification::class)
            ->withPivot('read_at')
            ->orderBy('internal_notification_user.created_at', 'desc')
            ->limit(10);
    }

    public function sendPasswordResetNotification($token)
    {
       $this->notify(new ResetPassword($token));
    }

    public function scopeAdmins($query) {
        $query->whereHas('role', function ($query) {
            $query->where('role_user.role_id', Role::ADMIN);
        });
    }

    public function scopeNonAdmins($query) {
        $query->whereHas('role', function ($query) {
            $query->where('role_user.role_id', Role::SIMPLE_USER);
        });
    }
    public function is($role) {
        switch($role) {
            case 'admin':
                foreach ($this->role as $role) {
                    if ($role->id == Role::ADMIN) {
                        return true;
                    }
                }
                break;
            case 'simple_user':
                foreach ($this->role as $role) {
                    if ($role->id == Role::SIMPLE_USER) {
                        return true;
                    }
                }
                break;
        }
        return false;
    }
}
