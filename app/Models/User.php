<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
// use Yadahan\AuthenticationLog\AuthenticationLogable;

/**
 *
 * @property string first_name
 * @property string middle_name
 * @property string last_name
 * @property string email
 * @property string password
 * @property integer status
 * @property string role
 * @property integer added_by
 */
class User extends Authenticatable implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory, Notifiable, SoftDeletes; //AuthenticationLogable


    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'status',
        'role',
        'added_by',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function departments(){
        return $this->belongsToMany(Department::class);
    }


    public function profile(){
        return $this->hasOne(UserProfile::class);
    }

    public function adder(){
        return $this->belongsTo(User::class, 'added_by')->withTrashed();
    }


    public function getFullName(){
        return $this->first_name . " ".
            $this->middle_name . " ".
            $this->last_name;
    }


    public function avatar(){
        if(strlen($this->profile->avatar) == 0){
            return "/images/logos/emarss.png";
        }
        return "/" .$this->profile->avatar;
    }

    public function nationalIdImage()
    {
        if(strlen($this->profile->national_id_image) == 0){
            return "/images/placeholder.png";
        }
        return "/" .$this->profile->national_id_image;
    }
}
