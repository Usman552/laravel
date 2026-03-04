<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Fields jo mass assignable hain (fillable)
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'address',
    ];

    // Hidden fields (like password & remember token)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Type casting
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Optional: Role check helper
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isPharmacist()
    {
        return $this->role === 'pharmacist';
    }

    public function isCustomer()
    {
        return $this->role === 'customer';
    }
}