<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public static $rules = [
        'first_name'            => 'required',
        'last_name'             => 'required',
        'email'                 => 'required|email|unique:users',
        'password'              => 'required|min:6|max:20',
        'password_confirmation' => 'required|same:password',
        'g-recaptcha-response'  => 'required'
    ];

    public static $messages = [
        'first_name.required'   => 'First Name is required',
        'last_name.required'    => 'Last Name is required',
        'email.required'        => 'Email is required',
        'email.email'           => 'Email is invalid',
        'password.required'     => 'Password is required',
        'password.min'          => 'Password needs to have at least 6 characters',
        'password.max'          => 'Password maximum length is 20 characters',
        'g-recaptcha-response.required' => 'Captcha is required'
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role')->withTimestamps();
    }

    public function hasRole($name)
    {
        foreach($this->roles as $role)
        {
            if($role->name == $name) return true;
        }

        return false;
    }

    public function assignRole($role)
    {
        return $this->roles()->attach($role);
    }

    public function removeRole($role)
    {
        return $this->roles()->detach($role);
    }

    public function social()
    {
        return $this->hasMany('App\Models\Social');
    }

    public function getSubscribedAttribute()
    {
        // Cari kupon untuk user ini
        $kupon = \App\Kupon::whereUserId($this->id)->first();
        if (!$kupon) {
            // Kupon tidak ada
            return false;
        }

        // Bandingkan aktif timestamp < 30 hari
        $teraktifasi = $kupon->activated;
        if ($teraktifasi) {
            $selisihAktifasi = \Carbon\Carbon::now()->diffInDays(new \Carbon\Carbon($kupon->activated_at));

            if ($selisihAktifasi < ($kupon->period * 30)) {
                // Berlaku
                return true;
            } else {
                // Kupon expired
                return false;
            }
        } else {
            return false;
        }
    }

    public function getApprovedAttribute()
    {
        // Cari kupon untuk user ini
        $kupon = \App\Kupon::whereUserId($this->id)->first();
        if (!$kupon) {
            // Kupon tidak ada
            return false;
        }

        // Bandingkan aktif timestamp < 30 hari
        $approved = $kupon->approved;
        if ($approved) {
            return true;
        } else {
            return false;
        }
    }
}
