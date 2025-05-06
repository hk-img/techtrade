<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function UserDetail()
    {
        return $this->hasOne('\App\Models\UserDetails', 'user_id','id');
    }
    
    public function retailer()
    {
        return $this->hasOne('\App\Models\Retailer', 'id','retailer_id');
    }

    public function orders(){
        return $this->hasMany(Order::class, 'user_id', 'id');
    }

    public function prescriptions(){
        return $this->hasMany(Prescription::class, 'user_id', 'id');
    }

    public function wishlists()
    {
        return $this->belongsToMany(Product::class, 'wishlist_product', 'user_id', 'product_id');
    }

    public function address(){
        return $this->hasMany(Address::class, 'user_id', 'id');
    }
}
